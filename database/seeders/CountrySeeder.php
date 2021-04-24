<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->insert([
            "name" => "Colombia"
        ]);

        DB::table('countries')->insert([
            "name" => "Brasil"
        ]);

        DB::table('countries')->insert([
            "name" => "Venezuela"
        ]);

        DB::table('countries')->insert([
            "name" => "Chile"
        ]);

        DB::table('countries')->insert([
            "name" => "Argentina"
        ]);

        DB::table('countries')->insert([
            "name" => "Bolivia"
        ]);

        DB::table('countries')->insert([
            "name" => "Perú"
        ]);

        DB::table('countries')->insert([
            "name" => "Paraguay"
        ]);

        DB::table('countries')->insert([
            "name" => "Ecuador"
        ]);

        DB::table('countries')->insert([
            "name" => "Uruguay"
        ]);
       
        
    }
}
