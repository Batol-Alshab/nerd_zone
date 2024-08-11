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
            $url.'رياضيات.jfif',
            $url.'فيزياء.jfif',
            $url.'كيميا.jfif',
            $url.'عربي.jfif',
            $url.'علوم.jfif',
            $url.'انكليزي.png',
            $url.'فرنسي.jfif',
            $url.'وطنية.jpg',
            $url.'ديانة.jfif',
        ];
        $image2=[
            $url.'فلسفة.jfif',
            $url.'تاريخ.jfif',
            $url.'جغرافيا.jpg',
            $url.'عربي.jfif',
            $url.'انكليزي.png',
            $url.'فرنسي.jfif',
            $url.'وطنية.jpg',
            $url.'ديانة.jfif',
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
        for ($i=0; $i <sizeof($l_material) ; $i++){
            Material::create([
                'name' => $l_material[$i],
                'image'=>$image2[$i],
                'section_id' => '2'
            ]);
        }
    }
}
