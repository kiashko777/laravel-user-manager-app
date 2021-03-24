<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkersTableSeeder extends Seeder
{
    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = \Faker\Factory::create();
//        DB::table("workers")->insert([
//            'first_name' => $this->faker->name(),
//            'second_name' => $this->faker->name(),
//            'position' => $this->faker->text(),
//            'salary' => $this->faker->randomDigit,
//            'created_at' => $this->faker->dateTime(),
//            'updated_at' => $this->faker->dateTime(),
//        ]);
    }
}
