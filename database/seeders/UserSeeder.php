<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $users = [
            [ 'role_id' => 1, 'name' => 'Shaurya', 'email' => 'shaurya16@gmail.com', 'phone' => '+91 6263793961', 'status' => 1, 'password' => Hash::make('newpassword123') ],
            [ 'role_id' => 1, 'name' => 'Anurag Sisodiya', 'email' => 'anurag@gmail.com', 'phone' => '+91 8770377021', 'status' => 1, 'password' => Hash::make('admin') ],
            [ 'role_id' => 1, 'name' => 'Hrishikesh Rathore', 'email' => 'hrishi@gmail.com', 'phone' => '91 9644644178', 'status' => 1, 'password' => Hash::make('Dhaka1216') ],
            [ 'role_id' => 2, 'name' => 'Tony Stark', 'email' => 'tony@stark.com', 'phone' => '+91 7869673107', 'status' => 1, 'password' => Hash::make('secret') ],
            [ 'role_id' => 3, 'name' => 'Viraj Rathore', 'email' => 'viraj@email.com', 'phone' => '+91 9977501545', 'status' => 1, 'password' => Hash::make('secret') ],
            [ 'role_id' => 3, 'name' => 'Shivam Singh ', 'email' => 'shivam@email.com', 'phone' => '+91 6264553754', 'status' => 1, 'password' => Hash::make('secret') ],
            [ 'role_id' => 4, 'name' => 'Praduny Patel', 'email' => 'praduny@email.com', 'phone' => '+91 9098887265', 'status' => 1, 'password' => Hash::make('secret') ],
            [ 'role_id' => 5, 'name' => 'raja meena', 'email' => 'raja@email.com', 'phone' => '+91 6266793961', 'status' => 1, 'password' => Hash::make('secret') ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
