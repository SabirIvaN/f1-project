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
            'user_id' => 1,
            'title' => 'Главный менеджер',
            'description' => 'Обращайтесь по вопросам сотрудничества и обслуживания.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('positions')->insert([
            'user_id' => 2,
            'title' => 'Главный инженер',
            'description' => 'Обращайтесь по вопросам починки принтеров, замены и заправки картриджей.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
