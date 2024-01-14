<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use App\Models\jns_barang;

class JnsBrgTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = jns_barang::class;
    protected $paginate = 3;
    public $searchBy = ['jns_brg'];

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return ['Jenis Barang','Deskripsi'];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->jns_brg,
            $model->desc,
            ];
    }
}
