<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $check = User::where('email',"admin@gmail.com")->first();
        if (empty($check)){
            $user = new User();
            $user->role_id = 1;
            $user->name = "Admin";
            $user->email = "admin@gmail.com";
            $user->password = bcrypt('0000');
            $user->save();
        } 
    }
}
