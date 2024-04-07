<?php

namespace Database\Seeders;

use App\Models\Locked_question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LockedQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Locked_question::create([
            'name' => 'الاختبار الاول',
            'url'=>'الاختبار الاول.pdf',
            'rate'=>10,
            'unit_id'=> '1',
        ]);   
        Locked_question::create([
            'name' => 'الاختبار الثاني',
            'url'=>'الاختبار الثاني.pdf',
            'rate'=>10,
            'unit_id'=> '1',
        ]);
    }
}
