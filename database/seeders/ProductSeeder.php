<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_category_id' => 1,
                'name' => 'Smartphone',
                'price' => 1000000,
                'image' => 'smartphone.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 2,
                'name' => 'Sofa',
                'price' => 400000,
                'image' => 'sofa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 3,
                'name' => 'Jeans',
                'price' => 100000,
                'image' => 'jeans.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
