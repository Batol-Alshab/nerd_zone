<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modul::create([
            'name' => 'النموذج الاول',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '1',
        ]);

        Modul::create([
            'name' => 'النموذج الثاني',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '1',
        ]);
        Modul::create([
            'name' => 'النموذج الاول',
            'is_open' => 0,
            'rate'=>20,
            'unit_id'=> '2',
        ]);
    }
}
