<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Customers;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=1;$i<=20;$i++)
        {

            $customers=new Customers; 
            $customers->name=$faker->name;
            $customers->email=$faker->email;
            $customers->gender='M';
            $customers->address=$faker->address;
            $customers->dob=$faker->date;
            $customers->city=$faker->city;
            $customers->password=$faker->password;
            $customers->save();
        }
    }
}
