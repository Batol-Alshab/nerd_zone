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
        User::create([
            'fname'=>'Nerd',
            'lname'=>'Zone',
            'password'=>'123456',
            'email'=>'nerd@zone.com',
            'sex'=>0,
            'section_id'=>'1'
            
        ]);
    }
}
