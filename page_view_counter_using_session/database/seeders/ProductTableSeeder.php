<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'product 1';
        $product->description = 'This is a new one';
        $product->price = 250;
        $product->view_count = 0;
        $product->save();

        $product = new Product();
        $product->name = 'product 2';
        $product->description = 'This is cheaper than you take in other place';
        $product->price = 150;
        $product->view_count = 0;
        $product->save();

        $product = new Product();
        $product->name = 'product 3';
        $product->description = 'This is so really cheap ! You need to try it!';
        $product->price = 115;
        $product->view_count = 0;
        $product->save();
    }
}
