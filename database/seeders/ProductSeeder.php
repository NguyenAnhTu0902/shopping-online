<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        DB::table('products')->insert([
           [
                'id' => 1,
                'brand_id' => 1,
                'name' => 'Loafer S202',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
            [
                'id' => 2,
                'brand_id' => 2,
                'name' => 'Loafer S203',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'name' => 'Loafer S204',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'brand_id' => 2,
                'name' => 'Loafer S205',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'name' => 'Loafer S206',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'brand_id' => 3,
                'name' => 'Loafer S207',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'brand_id' => 4,
                'name' => 'Loafer S208',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'brand_id' => 3,
                'name' => 'Loafer S209',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies',
                'price' => 150,
                'qty' => 4,
                'discount' => 120,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
