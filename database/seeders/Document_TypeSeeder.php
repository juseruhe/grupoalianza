<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Document_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
            "name" => "Cédula de Ciudadanía",
            "acronym" => "CC"
        ]);

        DB::table('document_types')->insert([
            "name" => "Tarjeta de Identidad",
            "acronym" => "TI"
        ]);

        DB::table('document_types')->insert([
            "name" => "Registro Cívil",
            "acronym" => "RC"
        ]);

        DB::table('document_types')->insert([
            "name" => "Pasaporte Permanencia",
            "acronym" => "PP"
        ]);
 
        DB::table('document_types')->insert([
            "name" => "Permiso Especial",
            "acronym" => "PE"
        ]);

        DB::table('document_types')->insert([
            "name" => "Pasaporte de Permanencia",
            "acronym" => "PP"
        ]);


        

    }
}
