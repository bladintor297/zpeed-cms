<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultpwd = '@DMINZPEED2023';
        $createMultipleUsers = [
            ['name' => 'ADMIN ZPEED', 'email' => 'info@zpeed.com.my', 'password'=>bcrypt($defaultpwd)],
            ['name' => 'IDHAM ANUR', 'email' => 'idham@zpeed.com.my', 'password'=>bcrypt($defaultpwd)],
        ];
        
        User::insert($createMultipleUsers);
    }
}
