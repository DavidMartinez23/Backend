<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_elec = new Category();
        $categoria_elec->name = 'Electrodomestico';
        $categoria_elec->description = "Esta es la categoria de electrodomesticos";
        $categoria_elec->save();

        $categoria_rop = new Category();
        $categoria_rop->name = 'Ropa';
        $categoria_rop->description = "Esta es la categoria de ropa";
        $categoria_rop->save();
    }
}
