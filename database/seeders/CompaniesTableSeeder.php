<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use Faker\Provider\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Company::truncate();
//        DB::table('companies')->insert([
//            'title' => Seeder::random(50),
//            'description' => Seeder::random(100)
//        ]);
    }

}
