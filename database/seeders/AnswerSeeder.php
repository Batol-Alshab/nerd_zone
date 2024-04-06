<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answer1 = [
            'مجموع جزيئات الدنا في النواة',
            'مجموع جزيئات الدنا في المتقدرات',
            'مجموع جزيئات الدنا  في خلية معينة',
            'مجموع جزيئات الدنا في الهيولى'
        ];
        $answer2 = [
            'غشاء الكييسات',
            'الغشاء الخارجي',
            'السدى',
            'أ+ج'
        ];
        $answer3 = [
            'تحتاج إلى 1000 لوكس',
            'لون أخضر فاتح',
            'تحتاج إلى 10000 لوكس',
            'لون أخضر غامق'
        ];
        $answer4 = [
            'تصلب الشرايين',
            'الدوالي',
            'الجلطة',
            'الذبحة الصدرية'
        ];
        $answer5 = [
            'بداية تقلص البطينين',
            'نهاية تقلص البطينين',
            'بداية تقلص الاذينين',
            'نهاية تقلص الاذينين'
        ];
        $answer6 = [
            'الالم',
            'الاحساس بعدم راحة في الصدر',
            'وجود خثرة دموية',
            'أ و ب'
        ];
        $answer7 = [
            'جدار الأذينة اليسرى',
            'جدار الأذينة اليمنى',
            'جدار البطين الأيسر',
            'جدار البطين الأيمن'
        ];
        $answer8 = [
            'بداية تقلص البطينين',
            'نهاية تقلص البطينين',
            'بداية تقلص الاذينين',
            'نهاية تقلص الاذينين'
        ];
        $answer9 = [
            'التامور',
            'الشغاف',
            'الجنب',
            'الصفاق'
        ];
        $answer10 = [
            'الخلايا الكبدية',
            'الخلايا القلبية',
            'الخلايا الحيوانية',
            'الخلايا النباتية'
        ];
        $index = ['0', '0', '1', '0'];
        foreach ($answer1 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 1
            ]);
        }
        foreach ($answer2 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 2
            ]);
        }
        foreach ($answer3 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 3
            ]);
        }
        foreach ($answer4 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 4
            ]);
        }
        foreach ($answer5 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 5
            ]);
        }
        foreach ($answer6 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 6
            ]);
        }
        foreach ($answer7 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 7
            ]);
        }
        foreach ($answer8 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 8
            ]);
        }
        foreach ($answer9 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 9
            ]);
        }
        foreach ($answer10 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'open_question_id' => 10
            ]);
        }


    }
}
