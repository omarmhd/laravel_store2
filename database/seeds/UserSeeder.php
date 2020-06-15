<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    $faker = Faker\Factory::create();




        // //to find  id  from category_id  //random
        // foreach ($category as $categorys) {

        //     $id_numbers[$i] = $categorys->id;
        //     $i++;
        // }
        $user=User::create([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>$faker->password
        ]);

        $AdminRole=Role::create([
            'name'=>'admin',
        ]);
        $name=$user->name;
        $user->roles()->attach($AdminRole,['name' => $name ]);
        foreach(App\Product::all() as $product) {

        if (range(1,5)!=4) {
            $user->products()->attach($product->id,);


        }


    }

}}
