<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $category = Category::select('id')->get();

        foreach (range(1,3) as $index) {
            $img_pth = $faker->image(public_path('\product_images'));
            $public_path = public_path('\product_images');
            $image = str_replace($public_path . "\\", '', $img_pth);

            $id_numbers = array();
            $i = 0;


            //to find  id  from category_id  //random
            foreach ($category as $categorys) {

                $id_numbers[$i] = $categorys->id;
                $i++;
            }
            Product::create([
                'name' => $faker->colorName,
                'price' => $faker->numberBetween($min = 10, $max = 90),
                'long_description' => $faker->text($maxNbChars = 300),
                'category_id' => $faker->randomElement($id_numbers),
                'image' => $image,
                'details' => $faker->text($maxNbChars = 20)
            ]);
        }
    }
}
