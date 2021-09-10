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

        // \App\Models\User::factory()->count(2)->create();
        // \App\Models\Service::factory()->count(3)->create();
        // \App\Models\Position::factory()->count(2)->create();
        // \App\Models\City::factory()->count(5)->create();
        // \App\Models\Order::factory()->create();

        /* Seeders */

        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            PositionSeeder::class,
            CitySeeder::class,
            OrderSeeder::class
        ]);
    }
}
