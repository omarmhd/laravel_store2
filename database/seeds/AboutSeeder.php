<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        $about= DB::table('about')->updateOrInsert([
            'Our_Mission'=>$faker->text(),
            'Our_Vision'=>$faker->text(),

         ]);
    }
}
