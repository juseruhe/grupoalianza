<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\PositionSeeder;
use Database\Seeders\GenderSeeder;
use Database\Seeders\Document_TypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(CountrySeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(Document_TypeSeeder::class);
    }
}
