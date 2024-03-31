<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'title' => 'وحدة العصبية',
            'material_id' => '5'
        ]);
        Unit::create([
            'title' => 'وحدة الوراثة',
            'material_id' => '5'
        ]);
        Unit::create([
            'title' => 'الوحدة الاولى ',
            'material_id' => '13'
        ]);
        Unit::create([
            'title' => 'الوحدة الثانية ',
            'material_id' => '13'
        ]);
    }
}
