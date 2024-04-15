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
        Term::create([
            'name'=>'2020 الدورة الاولى',
            'url'=>'2020 الدورة الاولى.pdf', 
            'material_id'=> '5' 
            ]);
    }
}
