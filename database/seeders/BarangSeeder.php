<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        barang::factory()->create([
            'nama_brg'=>'Kopi',
            'stok'=>100,
            'jml_terjual'=>10,
            'tgl_transaksi'=>'2021-01-05',
            'jns_brg'=>'Konsumsi',
            ]);

            //barang::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
