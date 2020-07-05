<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();


        $contact  = DB::table('contact')->updateOrInsert([
            'support_phone' =>$faker->numberBetween($min = 222, $max = 33333),
            'location_name' => "gaza tel alhwa",
            'support_email' =>"omarmhd19988@gmail.com"

        ]);

    }
}
