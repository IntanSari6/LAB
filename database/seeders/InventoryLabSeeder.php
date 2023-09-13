<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryLab;

class InventoryLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryLab::create([
            'nama_lab'=>"lab 2",
            'nama_barang'=>"mouse",
            'kode_barang'=>"D001",
            'status'=>"rusak",
        ]);
    }
}
