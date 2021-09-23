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

        // \App\Models\Position::factory()->count(2)->create();
        // \App\Models\Service::factory()->count(3)->create();
        // \App\Models\City::factory()->count(5)->create();
        // \App\Models\User::factory()->count(2)
        //     ->for(\App\Models\Position::all()->random())
        //     ->create();
        // \App\Models\Order::factory()->count(5)
        //     ->hasAttached(\App\Models\City::all()->random())
        //     ->hasAttached(\App\Models\Service::all()->random())
        //     ->create();

        /* Seeders */

        $this->call([
            PositionSeeder::class,
            ServiceSeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            OrderSeeder::class
        ]);
    }
}
