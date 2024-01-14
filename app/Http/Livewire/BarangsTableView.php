<?php

namespace App\Http\Livewire;

use App\Models\barang;
use LaravelViews\Facades\UI;
use App\Filters\TanggalFilter;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Action\DeleteBarangAction;
use LaravelViews\Views\Traits\WithAlerts;

class BarangsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = barang::class;

    public $searchBy = ['nama_brg','jns_brg'];

    protected function filters(){
        return [
            new TanggalFilter,
            ];
    }

    protected function actionsByRow(){
        return [
            new DeleteBarangAction,
            ];
    }
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [ Header::title('Nama Barang')->sortBy('nama_brg'),Header::title('Stok')->sortBy('stok'),Header::title('Jumlah Terjual')->sortBy('jml_terjual'),Header::title('Tanggal Transaksi')->sortBy('tgl_transaksi'),Header::title('Jenis Barang')->sortBy('jns_brg'),'Aksi'];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [$model->nama_brg,UI::editable($model,'stok'),$model->jml_terjual,$model->tgl_transaksi,$model->jns_brg,];
    }

    public function update($model,$data){
        $model->update($data);
        $this->success();
    }
}
