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
            'name' => 'النموذج الأول من وحدة العصبية',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '1',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة العصبية',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '1',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة المستقبلات',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '2',
        ]);
        Modul::create([
            'name' => 'النموذج الثالث من وحدة العصبية',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '1',
        ]);
        Modul::create([
            'name' => 'النموذج الرابع من وحدة العصبية',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '1',
        ]);
        ////////////////material 2
        Modul::create([
            'name' => 'النموذج الأول من وحدة النواسات',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '5',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة النواسات',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '5',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة المغناطيسية',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '6',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة المغناطيسية',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '6',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة الأمواج',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '7',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة الأمواج',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '7',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة القضايا',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '8',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة القضايا',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '8',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة العولمة',
            'is_open' => 1,
            'rate' => 10,
            'unit_id' => '9',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة العولمة',
            'is_open' => 0,
            'rate' => 10,
            'unit_id' => '9',
        ]);
        ////////////////material 2
        Modul::create([
            'name' => 'النموذج الأول من وحدة النواسات',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '5',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة النواسات',
            'is_open' => 0,
            'rate'=>10,
            'unit_id'=> '5',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة المغناطيسية',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '6',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة المغناطيسية',
            'is_open' => 0,
            'rate'=>10,
            'unit_id'=> '6',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة الأمواج',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '7',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة الأمواج',
            'is_open' => 0,
            'rate'=>10,
            'unit_id'=> '7',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة القضايا',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '8',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة القضايا',
            'is_open' => 0,
            'rate'=>10,
            'unit_id'=> '8',
        ]);
        Modul::create([
            'name' => 'النموذج الأول من وحدة العولمة',
            'is_open' => 1,
            'rate'=>10,
            'unit_id'=> '9',
        ]);
        Modul::create([
            'name' => 'النموذج الثاني من وحدة العولمة',
            'is_open' => 0,
            'rate'=>10,
            'unit_id'=> '9',
        ]);
        
    }
}
