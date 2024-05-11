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
        $url='http://127.0.0.1:8000/file/books/';
        Locked_question::create([
            'name' => 'الاختبار الاول',
            'url'=>$url.'الاختبار الاول.pdf',
            'rate'=>10,
            'unit_id'=> '1',
        ]);   
        Locked_question::create([
            'name' => 'الاختبار الثاني',
            'url'=>$url.'الاختبار الثاني.pdf',
            'rate'=>10,
            'unit_id'=> '1',
        ]);
    }
}
