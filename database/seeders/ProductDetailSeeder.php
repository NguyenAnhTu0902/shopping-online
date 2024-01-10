<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('product_details')->truncate();
        DB::table('product_details')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'size' => '40',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'size' => '41',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'product_id' => 2,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'product_id' => 3,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'product_id' => 4,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'product_id' => 5,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'product_id' => 6,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'product_id' => 7,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'product_id' => 8,
                'size' => '39',
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
