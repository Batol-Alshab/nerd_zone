<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url='http://127.0.0.1:8000/file/terms/';
        Term::create([
            'name'=>'2020 الدورة الاولى',
            'url'=>$url.'دورة اولى 2020.pdf', 
            'material_id'=> '5' 
            ]);
    }
}
