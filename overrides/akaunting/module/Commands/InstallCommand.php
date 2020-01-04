<?php

namespace Akaunting\Module\Commands;

use App\Models\Module\Module;
use App\Models\Module\ModuleHistory;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:install {alias} {company_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the specified module.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $alias = Str::kebab($this->argument('alias'));
        $company_id = $this->argument('company_id');

        $old_company_id = session('company_id');

        session(['company_id' => $company_id]);
        setting()->setExtraColumns(['company_id' => $company_id]);
        setting()->forgetAll();
        setting()->load(true);

        $module = module($alias);

        $model = Module::create([
            'company_id' => $company_id,
            'alias' => $alias,
            'enabled' => '1',
        ]);

        ModuleHistory::create([
            'company_id' => $company_id,
            'module_id' => $model->id,
            'category' => $module->get('category', 'payment-method'),
            'version' => $module->get('version'),
            'description' => trans('modules.installed', ['module' => $alias]),
        ]);

        $this->call('cache:clear');

        // Update database
        $this->call('migrate', ['--force' => true]);

        event(new \App\Events\Module\Installed($alias, $company_id));

        session()->forget('company_id');
        setting()->forgetAll();

        if (!empty($old_company_id)) {
            session(['company_id' => $old_company_id]);

            setting()->setExtraColumns(['company_id' => $old_company_id]);
            setting()->load(true);
        }

        $this->info('Module installed!');
    }

    /**
    * Get the console command arguments.
    *
    * @return array
    */
    protected function getArguments()
    {
        return array(
            array('alias', InputArgument::REQUIRED, 'Module alias.'),
            array('company_id', InputArgument::REQUIRED, 'Company ID.'),
        );
    }
}
