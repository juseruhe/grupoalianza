<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cities')->insert([
            "name" => "Bogota D.C.",
            "country_id" => 1
        ]);

        DB::table('cities')->insert([
            "name" => "Medellín",
            "country_id" => 1
        ]);

        DB::table('cities')->insert([
            "name" => "Cali",
            "country_id" => 1
        ]);

        DB::table('cities')->insert([
            "name" => "Barranquilla",
            "country_id" => 1
        ]);

        DB::table('cities')->insert([
            "name" => "Rio de Janeiro",
            "country_id" => 2
        ]);
    }
}
