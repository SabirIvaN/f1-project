<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'name'        => 'Главный менеджер',
            'description' => 'Обращайтесь по вопросам сотрудничества и обслуживания и финансов.',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        DB::table('positions')->insert([
            'name'        => 'Главный инженер',
            'description' => 'Обращайтесь по вопросам починки принтеров, замены и заправки картриджей.',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
