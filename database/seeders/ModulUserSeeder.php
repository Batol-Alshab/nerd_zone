<?php

namespace Database\Seeders;

use App\Models\ModulUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>1,
            'percent'=>50
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>2,
            'percent'=>20
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>3,
            'percent'=>100
        ]);

        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>6,
            'percent'=>50
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>7,
            'percent'=>20
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>8,
            'percent'=>80
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>9,
            'percent'=>40
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>10,
            'percent'=>90
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>11,
            'percent'=>0
        ]);
        //material 8
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>12,
            'percent'=>90
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>13,
            'percent'=>0
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>14,
            'percent'=>90
        ]);
        ModulUser::create([
            'user_id'=>2,
            'modul_id'=>15,
            'percent'=>20
        ]);
    }
}
