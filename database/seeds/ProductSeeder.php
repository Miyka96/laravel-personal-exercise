<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=>'Ocean',
                'description'=>'Blue t-shirt, elegant silk, unisex',
                'price'=>18.50,
                'size'=>'XS',
                'sustainability' => true
            ]
        ];
        foreach($products as $product){
            $new_product = new Product();

            $new_product->name = $product['name'];
            $new_product->description = $product['description'];
            $new_product->price = $product['price'];
            $new_product->size = $product['size'];
            $new_product->sustainability = $product['sustainability'];

            $new_product->save();

        }
    }
}
