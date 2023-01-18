<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $user = [
            [
                'name'           => 'Super Admin',
                'email'          => 'admin@mail.com',
                'password'       => Hash::make('Admin@12345'),
                'remember_token' => null,
                'created_at'     => '2023-01-18 00:00:00',
                'updated_at'     => '2023-01-18 00:00:00',
            ],
        ];

        User::insert($user);
    }
}
