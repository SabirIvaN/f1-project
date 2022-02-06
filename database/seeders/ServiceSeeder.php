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
            'price'       => 'от 300₽',
            'description' => 'Почистим, Заправим, Заменим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        DB::table('services')->insert([
            'name'        => 'Починить оргтехнику',
            'price'       => 'от 1000₽',
            'description' => 'Найдем проблему, Починим, Проверим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        DB::table('services')->insert([
            'name'        => 'Закупить расходники',
            'price'       => 'от 500₽',
            'description' => 'Закажем, Доставим, Установим',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
