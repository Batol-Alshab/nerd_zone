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
        $image=[
            'BOOK.png',
            'BOOK.png',
            'BOOK.png',
            'BOOK.png',
            'biology.jpg',
            'english.jpg',
            'BOOK.png',
            'BOOK.png',
            'BOOK.png',  
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
