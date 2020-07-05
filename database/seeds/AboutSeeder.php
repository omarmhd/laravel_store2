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

     //   $faker = Faker\Factory::create();

        $about= DB::table('about')->updateOrInsert([
            'Our_Mission'=>"Proving a stellar experience for your customers should be one of your main concerns as an e-commerce site owner. One way to do this is via filters. OpenCart lets you add a filter section on your sidebar, so your customer can sort your products by specific features",
            'Our_Vision'=>"Proving a stellar experience for your customers should be one of your main concerns as an e-commerce site owner. One way to do this is via filters. OpenCart lets you add a filter section on your sidebar, so your customer can sort your products by specific features",

         ]);
    }
}
