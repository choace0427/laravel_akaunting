<?php

namespace App\Exports\Common\Sheets;

use App\Abstracts\Export;
use App\Models\Common\Item as Model;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class Invoices extends Export implements WithColumnFormatting
{
    public function collection()
    {
        $model = Model::with('category')->usingSearchString(request('search'));

        if (!empty($this->ids)) {
            $model->whereIn('id', (array) $this->ids);
        }

        return $model->cursor();
    }

    public function map($model): array
    {
        $model->category_name = $model->category->name;

        return parent::map($model);
    }

    public function fields(): array
    {
        return [
            'name',
            'description',
            'sale_price',
            'purchase_price',
            'category_name',
            'enabled',
        ];
    }
}
