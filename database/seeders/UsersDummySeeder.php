<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersDummySeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ranma',
                'email' => 'rafi@portfolio.com',
                'password' => bcrypt('rafi123')
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
