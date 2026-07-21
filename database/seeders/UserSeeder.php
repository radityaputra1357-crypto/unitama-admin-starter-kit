<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'role' => 'superadmin',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
            ]
        ];

        foreach ($users as $user){
            User::factory()->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
            ]);
        }
    }
}