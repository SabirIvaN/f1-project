<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name'        => 'Заправить картридж',
            'price'       => 100,
            'description' => 'Почистим, Заправим, Заменим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        DB::table('services')->insert([
            'name'        => 'Заменить картридж',
            'price'       => 200,
            'description' => 'Закажем, Доставим, Установим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        DB::table('services')->insert([
            'name'        => 'Починить принтер',
            'price'       => 300,
            'description' => 'Починим, Почистим, Проверим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
