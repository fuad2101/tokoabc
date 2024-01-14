<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\barang;
use App\Models\jns_barang;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
