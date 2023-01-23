<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();
        foreach(range(1,10) as $value){
            DB::table("students")->insert([
                'f_name'=>$faker->firstName(),
                'l_name'=>$faker->lastName(),
                'city'=>$faker->city(),
                'state'=>$faker->streetAddress(),
                'fees'=>$faker->randomFloat(2),

            ]);

        }
    }
}
