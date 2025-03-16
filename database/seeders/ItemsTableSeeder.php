<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        $categories = DB::table('categories')->pluck('id', 'name');

        DB::table('items')->insert([
            ['name' => 'Smartphone', 'category_id' => $categories['Electronics']],
            ['name' => 'Sofa', 'category_id' => $categories['Furniture']],
            ['name' => 'T-Shirt', 'category_id' => $categories['Clothing']],
            ['name' => 'Novel', 'category_id' => $categories['Books']],
            ['name' => 'Action Figure', 'category_id' => $categories['Toys']],
        ]);
    }
}
