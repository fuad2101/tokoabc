<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jns_barang;

class JnsBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jns_barang::factory()->create(
            [
            'jns_brg'=>['Konsumsi','Pembersih'],
            'desc'=>['Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet'],
            ]);
    }
}
