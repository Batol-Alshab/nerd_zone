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
        $url='http://127.0.0.1:8000/images/unit_image/';
            
        Unit::create([
            'name' => 'وحدة العصبية',
            'image'=>$url.'unit1.png',
            'material_id' => '5'
        ]);
        Unit::create([
            'name' => 'وحدة الوراثة',
            'image'=>$url.'unit2.png',
            'material_id' => '5'
        ]);
        Unit::create([
            'name' => 'الوحدة الاولى ',
            'image'=>$url.'BOOk.png',
            'material_id' => '13'
        ]);
        Unit::create([
            'name' => 'الوحدة الثانية ',
            'image'=>$url.'BOOk.png',
            'material_id' => '13'
        ]);
        Unit::create([
            'name' => 'الوحدة الثالثة ',
            'image'=>$url.'BOOk.png',
            'material_id' => '13'
        ]);
    }
}
