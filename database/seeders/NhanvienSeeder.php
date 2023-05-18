<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NhanvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('nhanviens')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 65),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}

