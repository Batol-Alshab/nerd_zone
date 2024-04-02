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
        // DB::table('locked_questions')->insert([
        //     'url' => 'example.com/locked-question-1',
        //     'title' => 'Locked Question 1',
        //     'rate' => 5,
        //     'unit_id' => 1, // يجب أن يكون هذا القيمة موجودة في جدول 'units'
        // ]);
    }
}
