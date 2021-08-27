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

        // \App\Models\User::factory(2)->create();
        // \App\Models\Service::factory(3)->create();
        // \App\Models\Position::factory(2)->create();
        // \App\Models\Order::factory(10)->create();

        /* Seeders */

        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PositionSeeder::class);
        // $this->call(OrderSeeder::class);
    }
}
