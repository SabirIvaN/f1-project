<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'position_id'       => 1,
            'name'              => 'Андрей Викторович Янчеленко',
            'email'             => 'yanchelenko@rambler.ru',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
            'updated_at'        => now(),
            'permissions'       => json_encode([
                "platform.systems.roles"      => true,
                "platform.systems.users"      => true,
                "platform.systems.attachment" => true,
                "platform.index"              => true,
            ]),
        ]);
        DB::table('users')->insert([
            'position_id'       => 2,
            'name'              => 'Антон Николаевич Соломин',
            'email'             => 'antsol65@yandex.ru',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
            'updated_at'        => now(),
            'permissions'       => json_encode([
                "platform.systems.roles"      => true,
                "platform.systems.users"      => true,
                "platform.systems.attachment" => true,
                "platform.index"              => true,
            ]),
        ]);
    }
}
