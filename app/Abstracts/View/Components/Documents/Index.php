<?php

namespace App\Abstracts\View\Components\Documents;

use Akaunting\Module\Module;
use App\Abstracts\View\Component;
use App\Events\Common\BulkActionsAdding;
use App\Traits\Documents;
use App\Traits\Modules;
use App\Traits\ViewComponents;
use Illuminate\Support\Str;
use Illuminate\View\View;

abstract class Index extends Component
{
    use Documents, Modules, ViewComponents;

    public const OBJECT_TYPE = 'document';
    public const DEFAULT_TYPE = 'invoice';
    public const DEFAULT_PLURAL_TYPE = 'invoices';

    /* -- Main Start -- */
    /** @var string */
    public $type;

    /** @var string */
    public $alias;

    public $documents;

    /** @var string */
    public $group;

    /** @var string */
    public $page;

    /** @var string */
    public $textTabDocument;

    /** @var string */
    public $routeTabDocument;

    /** @var string */
    public $routeTabRecurring;

    /** @var string */
    public $textPage;

    /** @var string */
    public $permissionCreate;

    /** @var string */
    public $permissionUpdate;

    /** @var string */
    public $permissionDelete;
    /* -- Main End -- */

    /* -- Buttons Start -- */
    /** @var bool */
    public $hideAcceptPayment;

    /** @var bool */
    public $checkPermissionCreate;

    /** @var bool */
    public $hideCreate;

    /** @var bool */
    public $hideImport;

    /** @var bool */
    public $hideExport;

    /** @var string */
    public $createRoute;

    /** @var string */
    public $importRoute;

    /** @var array */
    public $importRouteParameters;

    /** @var string */
    public $exportRoute;
    /* -- Buttons End -- */

    /* -- Content Start -- */
    /** @var bool */
    public $hideEmptyPage;

    /** @var array */
    public $emptyPageButtons;

    /** @var string */
    public $imageEmptyPage;

    /** @var string */
    public $textEmptyPage;

    /** @var string */
    public $urlDocsPath;

    /** @var bool */
    public $hideSummary;

    /** @var array */
    public $summaryItems;

    /** @var bool */
    public $withoutTabs;

    /** @var string */
    public $tabActive;

    /** @var bool */
    public $hideRecurringTemplates;

    /** @var bool */
    public $hideSearchString;

    /** @var bool */
    public $hideBulkAction;

    /** @var string */
    public $searchStringModel;

    /** @var string */
    public $bulkActionClass;

    /** @var array */
    public $bulkActionRouteParameters;

    /** @var string */
    public $searchRoute;

    /** @var string */
    public $classBulkAction;

    /** @var bool */
    public $hideDueAt;

    /** @var bool */
    public $hideIssuedAt;

    /** @var string */
    public $classDueAtAndIssueAt;

    /** @var string */
    public $textDueAt;

    /** @var string */
    public $textIssuedAt;

    /** @var bool */
    public $hideStatus;

    /** @var string */
    public $classStatus;

    /** @var bool */
    public $hideContactName;

    /** @var bool */
    public $hideDocumentNumber;

    /** @var string */
    public $classContactNameAndDocumentNumber;

    /** @var string */
    public $textContactName;

    /** @var string */
    public $showContactRoute;

    /** @var string */
    public $textDocumentNumber;

    /** @var bool */
    public $hideAmount;

    /** @var string */
    public $classAmount;

    /** @var bool */
    public $hideShow;

    /** @var string */
    public $showRoute;

    /** @var bool */
    public $hideEdit;

    /** @var string */
    public $editRoute;

    /** @var bool */
    public $hideDuplicate;

    /** @var string */
    public $duplicateRoute;

    /** @var string */
    public $textDocumentStatus;

    /** @var bool */
    public $checkButtonReconciled;

    /** @var bool */
    public $checkButtonCancelled;
    /* -- Content End -- */

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $type, string $alias = '', $documents = [], string $group = '', string $page = '', string $textTabDocument = '', string $textPage = '',
        string $routeTabDocument = '', string $routeTabRecurring = '',
        string $permissionCreate = '', string $permissionUpdate = '', string $permissionDelete = '',
        bool $hideAcceptPayment = false, bool $checkPermissionCreate = true,
        bool $hideCreate = false, bool $hideImport = false, bool $hideExport = false,
        string $createRoute = '', string $importRoute = '', array $importRouteParameters = [], string $exportRoute = '',
        bool $hideEmptyPage = false, array $emptyPageButtons = [], string $imageEmptyPage = '', string $textEmptyPage = '', string $urlDocsPath = '',
        bool $hideSummary = false, array $summaryItems = [],
        bool $withoutTabs = false, string $tabActive = '', bool $hideRecurringTemplates = false,
        bool $hideSearchString = false, bool $hideBulkAction = false,
        string $searchStringModel = '', string $bulkActionClass = '', array $bulkActions = [], array $bulkActionRouteParameters = [], string $searchRoute = '', string $classBulkAction = '',
        bool $hideDueAt = false, bool $hideIssuedAt = false, string $classDueAtAndIssueAt = '', string $textDueAt = '', string $textIssuedAt = '',
        bool $hideStatus = false, string $classStatus = '',
        bool $hideContactName = false, bool $hideDocumentNumber = false, string $classContactNameAndDocumentNumber = '', string $textContactName = '', string $showContactRoute = '', string $textDocumentNumber = '',
        bool $hideAmount = false, string $classAmount = '',
        bool $hideShow = false, string $showRoute = '', bool $hideEdit = false, string $editRoute = '', bool $hideDuplicate = false, string $duplicateRoute = '',
        string $textDocumentStatus = '',
        bool $checkButtonReconciled = true, bool $checkButtonCancelled = true
    ) {
        /* -- Main Start -- */
        $this->type = $type;
        $this->alias = $this->getAlias($type, $alias);
        $this->documents = ($documents) ? $documents : collect();
        $this->group = $this->getGroup($type, $group);
        $this->page = $this->getPage($type, $page);
        $this->textTabDocument = $this->getTextTabDocument($type, $textTabDocument);
        $this->textPage = $this->getTextPage($type, $textPage);

        $this->permissionCreate = $this->getPermissionCreate($type, $permissionCreate);
        $this->permissionUpdate = $this->getPermissionUpdate($type, $permissionUpdate);
        $this->permissionDelete = $this->getPermissionDelete($type, $permissionDelete);

        $this->routeTabDocument = $this->getRouteTabDocument($type, $routeTabDocument);
        $this->routeTabRecurring = $this->getRouteTabRecurring($type, $routeTabRecurring);
        /* -- Main End -- */

        /* -- Buttons Start -- */
        $this->hideAcceptPayment = $hideAcceptPayment;

        $this->checkPermissionCreate = $checkPermissionCreate;

        $this->hideCreate = $hideCreate;
        $this->hideImport = $hideImport;
        $this->hideExport = $hideExport;

        $this->createRoute = $this->getCreateRoute($type, $createRoute);
        $this->importRoute = $this->getImportRoute($importRoute);
        $this->importRouteParameters = $this->getImportRouteParameters($type, $importRouteParameters);
        $this->exportRoute = $this->getExportRoute($type, $exportRoute);
        /* -- Buttons End -- */

        /* -- Content Start -- */
        /* -- Empty Page Start -- */
        $this->hideEmptyPage = $hideEmptyPage;

        $this->emptyPageButtons = $this->getEmptyPageButtons($type, $emptyPageButtons);
        $this->imageEmptyPage = $this->getImageEmptyPage($type, $imageEmptyPage);
        $this->textEmptyPage = $this->getTextEmptyPage($type, $textEmptyPage);
        $this->urlDocsPath = $this->getUrlDocsPath($type, $urlDocsPath);
        /* -- Empty Page End -- */

        /* -- Summary Start -- */
        $this->hideSummary = $hideSummary;
        $this->summaryItems = $this->getSummaryItems($type, $summaryItems);
        /* -- Sumamry End -- */

        /* Container Start */
        $this->withoutTabs = $withoutTabs;
        $this->tabActive = $this->getTabActive($type, $tabActive);

        $this->hideRecurringTemplates = $hideRecurringTemplates;

        $this->hideSearchString = $hideSearchString;
        $this->hideBulkAction = $hideBulkAction;

        $this->searchStringModel = $this->getSearchStringModel($type, $searchStringModel);

        $this->bulkActionClass = $this->getBulkActionClass($type, $bulkActionClass);
        $this->bulkActionRouteParameters = $this->getBulkActionRouteParameters($type, $bulkActionRouteParameters);

        $this->searchRoute = $this->getIndexRoute($type, $searchRoute);

        $this->classBulkAction = $this->getClassBulkAction($type, $classBulkAction);

        /* Document Start */
        $this->hideDueAt = $hideDueAt;
        $this->hideIssuedAt = $hideIssuedAt;
        $this->classDueAtAndIssueAt = $this->getClassDueAtAndIssueAt($type, $classDueAtAndIssueAt);
        $this->textDueAt = $this->getTextDueAt($type, $textDueAt);
        $this->textIssuedAt = $this->getTextIssuedAt($type, $textIssuedAt);

        $this->hideStatus = $hideStatus;
        $this->classStatus = $this->getClassStatus($type, $classStatus);

        $this->hideContactName = $hideContactName;
        $this->hideDocumentNumber = $hideDocumentNumber;
        $this->classContactNameAndDocumentNumber = $this->getClassContactNameAndDocumentNumber($type, $classContactNameAndDocumentNumber);
        $this->textContactName = $this->getTextContactName($type, $textContactName);
        $this->showContactRoute = $this->getShowContactRoute($type, $showContactRoute);
        $this->textDocumentNumber = $this->getTextDocumentNumber($type, $textDocumentNumber);

        $this->hideAmount = $hideAmount;
        $this->classAmount = $this->getClassAmount($type, $classAmount);

        $this->hideShow = $hideShow;
        $this->showRoute = $this->getShowRoute($type, $showRoute);

        $this->hideEdit = $hideEdit;
        $this->editRoute = $this->getEditRoute($type, $editRoute);

        $this->hideDuplicate = $hideDuplicate;
        $this->duplicateRoute = $this->getDuplicateRoute($type, $duplicateRoute);

        $this->textDocumentStatus = $this->getTextDocumentStatus($type, $textDocumentStatus);

        $this->checkButtonReconciled = $checkButtonReconciled;
        $this->checkButtonCancelled = $checkButtonCancelled;
        /* Document End */
        /* Container End */
        /* -- Content End -- */

        // Set Parent data
        $this->setParentData();
    }

    protected function getEmptyPageButtons($type, $emptyPageButtons)
    {
        if (! empty($emptyPageButtons)) {
            return $emptyPageButtons;
        }

        $prefix = config('type.' . static::OBJECT_TYPE . '.' . $type . '.route.prefix', 'invoices');

        $buttons = [];

        if (! $this->hideCreate) {
            $route = $this->getRouteFromConfig($type, 'create');

            $buttons[] = [
                'permission'    => $this->permissionCreate,
                'url'           => route($this->createRoute),
                'text'          => trans('general.title.new', ['type' => trans_choice($this->textPage ?? 'general.' . $prefix, 1)]),
                'description'   => trans('general.empty.actions.new', ['type' => strtolower(trans_choice($this->textPage ?? 'general.' . $prefix, 1))]),
                'active_badge'  => true,
            ];
        }

        if (! $this->hideImport) {
            $route = $this->getRouteFromConfig($type, 'import');

            $buttons[] = [
                'permission'    => $this->permissionCreate,
                'url'           => route($this->importRoute, $this->importRouteParameters),
                'text'          => trans('import.title', ['type' => trans_choice($this->textPage ?? 'general.' . $prefix, 1)]),
                'description'   => trans('general.empty.actions.import', ['type' => strtolower(trans_choice($this->textPage ?? 'general.' . $prefix, 1))]),
            ];
        }

        return $buttons;
    }

    public function getSummaryItems($type, $summaryItems)
    {
        if (! empty($summaryItems)) {
            return $summaryItems;
        }

        $route = $this->getIndexRoute($type, null);

        $totals = $this->getTotalsForFutureDocuments($type);

        $items = [];

        foreach ($totals as $key => $total) {
            $title = ($key == 'overdue') ? trans('general.overdue') : trans('documents.statuses.' . $key);
            $href = route($route, ['search' => 'status:' . $key]);
            $amount = money($total, setting('default.currency'), true)->formatForHumans();
            $tooltip = money($total, setting('default.currency'), true)->format();

            $items[] = [
                'title'     => $title,
                //'href'      => $href,
                'amount'    => $amount,
                'tooltip'   => $tooltip,
            ];
        }

        return $items;
    }

    protected function getTextTabDocument($type, $textTabDocument)
    {
        if (! empty($textTabDocument)) {
            return $textTabDocument;
        }

        $default_key = config('type.' . static::OBJECT_TYPE . '.' . $type . '.translation.prefix');

        $translation = $this->getTextFromConfig($type, 'tab_document', $default_key);

        if (! empty($translation)) {
            return $translation;
        }

        return 'general.invoices';
    }

    public function getTabActive($type, $tabActive)
    {
        if (! empty($tabActive)) {
            return $tabActive;
        }

        return $type;
    }

    protected function getRouteTabDocument($type, $routeTabDocument)
    {
        if (! empty($routeTabDocument)) {
            return $routeTabDocument;
        }

        $route = $this->getRouteFromConfig($type, 'document', 'invoices');

        if (! empty($route)) {
            return $route;
        }

        return 'invoices.index';
    }

    protected function getRouteTabRecurring($type, $routeTabDocument)
    {
        if (! empty($routeTabDocument)) {
            return $routeTabDocument;
        }

        $route = $this->getRouteFromConfig($type, 'recurring', 'recurring-invoices');

        if (! empty($route)) {
            return $route;
        }

        return 'recurring-invoices.index';
    }

    protected function getClassDueAtAndIssueAt($type, $classDueAtAndIssueAt)
    {
        if (! empty($classDueAtAndIssueAt)) {
            return $classDueAtAndIssueAt;
        }

        $class = $this->getClassFromConfig($type, 'due_at_and_issue_at');

        if (! empty($class)) {
            return $class;
        }

        return 'w-4/12 table-title hidden sm:table-cell';
    }

    protected function getTextDueAt($type, $textDueAt)
    {
        if (! empty($textDueAt)) {
            return $textDueAt;
        }

        $translation = $this->getTextFromConfig($type, 'due_at', 'due_date');

        if (! empty($translation)) {
            return $translation;
        }

        return 'invoices.due_date';
    }

    protected function getTextIssuedAt($type, $textIssuedAt)
    {
        if (! empty($textIssuedAt)) {
            return $textIssuedAt;
        }

        switch ($type) {
            case 'bill':
            case 'expense':
            case 'purchase':
                $default_key = 'bill_date';
                break;
            default:
                $default_key = 'invoice_date';
                break;
        }

        $translation = $this->getTextFromConfig($type, 'issued_at', $default_key);

        if (! empty($translation)) {
            return $translation;
        }

        return 'invoices.invoice_date';
    }

    protected function getClassStatus($type, $classStatus)
    {
        if (! empty($classStatus)) {
            return $classStatus;
        }

        $class = $this->getClassFromConfig($type, 'status');

        if (! empty($class)) {
            return $class;
        }

        return 'w-3/12 table-title hidden sm:table-cell';
    }

    protected function getClassContactNameAndDocumentNumber($type, $classContactNameAndDocumentNumber)
    {
        if (! empty($classContactNameAndDocumentNumber)) {
            return $classContactNameAndDocumentNumber;
        }

        $class = $this->getClassFromConfig($type, 'contact_name');

        if (! empty($class)) {
            return $class;
        }

        return 'w-6/12 sm:w-3/12 table-title';
    }

    protected function getTextContactName($type, $textContactName)
    {
        if (! empty($textContactName)) {
            return $textContactName;
        }

        $default_key = Str::plural(config('type.' . static::OBJECT_TYPE . '.' . $type . '.contact_type'), 2);

        $translation = $this->getTextFromConfig($type, 'contact_name', $default_key, 'trans_choice');

        if (! empty($translation)) {
            return $translation;
        }

        return 'general.customers';
    }

    protected function getShowContactRoute($type, $showContactRoute)
    {
        if (! empty($showContactRoute)) {
            return $showContactRoute;
        }


        if (! empty($showRoute)) {
            return $showRoute;
        }

        $route = $this->getRouteFromConfig($type, 'contact.show', 1);

        if (!empty($route)) {
            return $route;
        }

        $default_key = Str::plural(config('type.' . static::OBJECT_TYPE . '.' . $type . '.contact_type'), 2);

        return $default_key . '.show';
    }

    protected function getTextDocumentNumber($type, $textDocumentNumber)
    {
        if (! empty($textDocumentNumber)) {
            return $textDocumentNumber;
        }

        $translation = $this->getTextFromConfig($type, 'document_number', 'numbers');

        if (! empty($translation)) {
            return $translation;
        }

        return 'general.numbers';
    }

    protected function getClassAmount($type, $classAmount)
    {
        if (! empty($classAmount)) {
            return $classAmount;
        }

        $class = $this->getClassFromConfig($type, 'amount');

        if (! empty($class)) {
            return $class;
        }

        return 'w-6/12 sm:w-2/12';
    }

    protected function getTextDocumentStatus($type, $textDocumentStatus)
    {
        if (! empty($textDocumentStatus)) {
            return $textDocumentStatus;
        }

        $translation = $this->getTextFromConfig($type, 'document_status', 'statuses.');

        if (! empty($translation)) {
            return $translation;
        }

        $alias = config('type.' . static::OBJECT_TYPE . '.' . $type . '.alias');

        if (! empty($alias)) {
            $translation = $alias . '::' . config('type.' . static::OBJECT_TYPE . '.' . $type . '.translation.prefix') . '.statuses';

            if (is_array(trans($translation))) {
                return $translation . '.';
            }
        }

        return 'documents.statuses.';
    }
}
