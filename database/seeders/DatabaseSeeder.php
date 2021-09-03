<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Factories */

        \App\Models\User::factory()->create();
        \App\Models\Service::factory()->create();
        \App\Models\Position::factory()->create();
        \App\Models\City::factory()->create();
        \App\Models\Order::factory()->create();

        /* Seeders */

        // $this->call([
        //     UserSeeder::class,
        //     ServiceSeeder::class,
        //     PositionSeeder::class,
        //     CitySeeder::class,
        //     OrderSeeder::class
        // ]);
    }
}
