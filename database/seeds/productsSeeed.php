<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class productsSeeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Iphone 12',
            'description' => Str::random(40),
            'price' => 200.000,
            'quantity' => 2,
            'image' => 'iPhone-12.png',
            'category' => 'eletronic_device'
        ]);

        DB::table('products')->insert([
            'name' => 'Huawei P30 Lite',
            'description' => Str::random(40),
            'price' => 150.000,
            'quantity' => 5,
            'image' => 'Huawei P30 Lite.jpg',
            'category' => 'eletronic_device'
        ]);
    }
}
