<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderables')->insert([
            'order_id' => 1,
            'orderable_type' => \App\Models\City::class,
            'orderable_id' => 1,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 1,
            'orderable_type' => \App\Models\Service::class,
            'orderable_id' => 3,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 2,
            'orderable_type' => \App\Models\City::class,
            'orderable_id' => 1,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 2,
            'orderable_type' => \App\Models\Service::class,
            'orderable_id' => 3,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 3,
            'orderable_type' => \App\Models\City::class,
            'orderable_id' => 1,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 3,
            'orderable_type' => \App\Models\Service::class,
            'orderable_id' => 3,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 4,
            'orderable_type' => \App\Models\City::class,
            'orderable_id' => 1,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 4,
            'orderable_type' => \App\Models\Service::class,
            'orderable_id' => 3,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 5,
            'orderable_type' => \App\Models\City::class,
            'orderable_id' => 1,
        ]);
        DB::table('orderables')->insert([
            'order_id' => 5,
            'orderable_type' => \App\Models\Service::class,
            'orderable_id' => 3,
        ]);
    }
}
