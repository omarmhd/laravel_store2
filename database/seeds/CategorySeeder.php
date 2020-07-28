<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   $faker = Faker\Factory::create();

   foreach (range(1,4) as $index) {

        $Category=Category::create([
            'name'=>$faker->name,
            'description'=>$faker->text($maxNbChars = 200),
            'status'=>$faker->randomElement(['active','disable'])
        ]);

    }
}
}
