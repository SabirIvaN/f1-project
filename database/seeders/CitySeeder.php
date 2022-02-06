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
            'name'       => 'г. Санкт-Петербург',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Зеленогорск',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Колпино',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Красное Село',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Кронштадт',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Ломоносов ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Павловск',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Пушкин',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cities')->insert([
            'name'       => 'г. Сестрорецк',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
