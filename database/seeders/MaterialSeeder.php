<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s_material=[
            'الرياضيات',
            'الفيزياء',
            'الكيمياء',
            'اللغة العربية',
            'علم الأحياء',
            'اللغة الإنكليزية',
            'اللغة الفرنسية',
            ' التربية الوطنية ',
            'التربية الدينية',
        ];
        $url='http://127.0.0.1:8000/images/material_image/';
        $image=[
            $url.'BOOk.png',
            $url.'BOOK.png',
            $url.'BOOK.png',
            $url.'arabic.jpg',     
            $url.'biology.jpg',
            $url.'english.jpg',
            $url.'BOOK.png',
            $url.'BOOK.png',
            $url.'BOOK.png',  
        ];
        $l_material=[
            'الفلسفة',
            'التاريخ',
            'الجغرافيا',
            'اللغة العربية',
            'اللغة الانكليزية',
            'اللغة الفرنسية',
            'التربية الوطنية',
            'التربية الدينية'
        ];
        for ($i=0; $i <sizeof($s_material) ; $i++) { 
            Material::create([
                'name' => $s_material[$i],
                'image'=>$image[$i],
                'section_id' => '1',
            ]);
        }
        // $i=0;
        // foreach ($s_material as $s) {
        //     Material::create([
        //         'name' => $s,
        //         'image'=>$image[$i],
        //         'section_id' => '1',
                
        //     ]);
        //     $i=$i+1;
        // }
        foreach ($l_material as $l) {
            Material::create([
                'name' => $l,
                'section_id' => '2'
            ]);
        }
    }
}
