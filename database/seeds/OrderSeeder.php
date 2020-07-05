<?php

use App\order;
use App\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $User = User::select('id')->get();




            $id_numbers = array();
           $i=0;
            foreach ($User as $Users) {

                $id_numbers[$i] = $Users->id;
                $i++;
            }
            order::create([
                'user_id'=>$faker->randomElement($id_numbers),
                'billing_email'=>$faker->email,
                'billing_name'=>$faker->name,
                'billing_address'=>$faker->address,
                'billing_city'=>$faker->city,
                'billing_province'=>$faker->postcode,
                'billing_postalcode'=>$faker->postcode,
                'billing_phone'=>$faker->phoneNumber ,
            ]);

            $i=0;
           foreach(App\order::all() as $orders) {

               if ($i<3) {
                   $orders->products()->attach($orders->id,['quantity'=>'2']);


               }
        $i++;
   }
}
}
