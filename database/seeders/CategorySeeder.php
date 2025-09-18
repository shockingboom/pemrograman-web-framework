<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Category::insert([
        ['name'=>'Wash & Fold','description'=>'Cuci-kering-lipat','created_at'=>now(),'updated_at'=>now()],
        ['name'=>'Dry Clean','description'=>'Dry cleaning pakaian','created_at'=>now(),'updated_at'=>now()],
        ['name'=>'Express','description'=>'Selesai cepat 6-12 jam','created_at'=>now(),'updated_at'=>now()],
    ]);
}

}
