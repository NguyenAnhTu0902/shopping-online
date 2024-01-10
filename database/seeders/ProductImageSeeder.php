<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('product_images')->truncate();
        DB::table('product_images')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'path' => 'loafer-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'path' => 'loafer-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'path' => 'loafer-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'product_id' => 4,
                'path' => 'loafer-4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'product_id' => 5,
                'path' => 'boot-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'product_id' => 6,
                'path' => 'boot-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'product_id' => 7,
                'path' => 'boot-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'product_id' => 8,
                'path' => 'boot-4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
        Schema::enableForeignKeyConstraints();
    }
}
