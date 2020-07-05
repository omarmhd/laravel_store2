<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(OrderSeeder::class);
         $this->call(AboutSeeder::class);
         $this->call(MessageSeeder::class);
         $this->call(ContactSeeder::class);


    }
}
