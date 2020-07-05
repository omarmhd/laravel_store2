<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $meessage = DB::table('messages')->insert([
            'meesage' => $faker->text(),
            'name' => $faker->name,
            'email' =>  $faker->email,
            'subject' => $faker->name
        ]);
      }
    }

