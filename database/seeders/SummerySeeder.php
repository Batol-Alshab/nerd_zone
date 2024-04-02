<?php

namespace Database\Seeders;

use App\Models\Summery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SummerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Summery::create([
            'name'=>'الاختبار الاول',
            'url'=>'الاختبار الاول.pdf', 
            'unit_id'=> '1' 
            ]);
        Summery::create([
            'name'=>'الاختبار الثاني',
            'url'=>'الاختبار الثاني.pdf', 
            'unit_id'=> '1' 
            ]);
    }
}
