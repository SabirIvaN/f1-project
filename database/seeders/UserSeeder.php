<?php

namespace Database\Seeders;

use App\Models\Position;
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
            'position_id' => Position::all()->random()->id,
            'name' => 'Андрей Викторович Янчеленко',
            'email' => 'andyan@f1.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => json_encode([
                "platform.systems.roles" => true,
                "platform.systems.users" => true,
                "platform.systems.attachment" => true,
                "platform.index" => true,
            ]),
        ]);
        DB::table('users')->insert([
            'position_id' => Position::all()->random()->id,
            'name' => 'Антон Николаевич Соломин',
            'email' => 'antsol@f1.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => json_encode([
                "platform.systems.roles" => true,
                "platform.systems.users" => true,
                "platform.systems.attachment" => true,
                "platform.index" => true,
            ]),
        ]);
    }
}
