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
            'name'=>'الملخص الاول',
            'url'=>'الملخص الاول.pdf', 
            'unit_id'=> '1' 
            ]);
        Summery::create([
            'name'=>'الملخص الثاني',
            'url'=>'الملخص الثاني.pdf', 
            'unit_id'=> '1' 
            ]);
    }
}
