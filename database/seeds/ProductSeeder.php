<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {


        for($i=0;$i<80;$i++){
            $new_product = new Product();

            $new_product->name = $faker->word();
            $new_product->img = $faker->imageUrl(150,150,'dress',true);
            $new_product->description = $faker->sentence(5);
            $new_product->price = $faker->randomFloat(2, 5, 200);
            $new_product->size = $faker->randomElement(['XS', 'S', 'M', 'L', 'XL','XXL']);
            $new_product->sustainability = $faker->boolean();
    
            $new_product->save();
        }
    }
}
