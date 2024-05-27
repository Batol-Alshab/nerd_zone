<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $answer11 = [
            'الوطاء',
            ' الحدبة الحلقية ',
            'المهاد',
            'الحدبات'
        ];
        $answer12 = [
            ' الزمن المفيد الأساسي',
            'الكروناكسي',
            ' زمن الاستنفاد ',
            ' زمن الامتناع '
        ];
        $answer13 = [
            'بروكا',
            'فيرنكا',
            ' الترابط أمام الجبهية',
            ' الترابط الحافية '
        ];
        
        $answer14 = [
            ' عصبون جسمه في  العقدة ',
            '	عصبون جسمه في المهاد',
            ' عصبون جسمه في البصلة السيسائية',
            ' عصبون جسمه في المادة الرمادية للنخاع الشوكي '
        ]; 	
        $answer15 = [
            'المهاد',
            ' الحدبة الحلقية',
            ' الحدبات التوأمية الأربعة ',
            ' الجسم الثفني '
        ];
        $answer16 = [
            ' البصلة السيسائية',
            'الحدبات',
            ' التوأمية الأربعة',
            'الحصين'
        ];
        $answer17 = [
            ' قناة سلفيوس',
            ' قناة السيساء',
            ' فرجتا مونرو ',
            ' ثقب ماجندي وثقبا لوشكا '
        ];
        $answer18 = [
            ' فرط الاستقطاب',
            ' زوال استقطاب ',
            ' انعكاس استقطاب ',
            ' انخفاض الاستقطاب '
        ];  
        $answer19 = [
            'مفيد',
            ' مفيد أساسي',
            'استنفاد',
            'كروناكسي'
        ]; 
        $answer20 = [
            'الشوكي',
            'الشمي',
            'الوركي',
            'البصري'
        ]; 
        $answer21 = [
            ' الحدبتان التوءميتان',
            ' السويقتان المخيتان',
            ' الحدبة الحلقية',
            ' البصلة السيسائية '
        ];
        $answer22 = [
            'نجمية',
            'ساتلة',
            'شوان',
            ' قليلة الاستطالات'
        ];  
        $answer23 = [
            ' الحدبتان التوءميتان',
            ' السويقتان المخيتان',
            ' الحدبة الحلقية',
            ' البصلة السيسائية '
        ]; 
        $answer24 = [
            ' قليلة الاستطالات ',
            'النجمية',
            'الصغيرة',
            ' البطانة العصبية '
        ];
        $answer25 = [
            ' القرنين الأماميان في النخاع الشوكي',
            ' العقدة الشوكية والبطانة العصبية ',
            ' قشرة المخ وبعض أعضاء الحواس ',
            ' قشرة المخيخ وشبكية العين '
        ]; 
        $answer26 = [
            ' العقد العصبية',
            ' شبكية العين',
            ' القشرة المخية',
            ' القرنان الأماميان للنخاع الشوكي '
        ]; 
        $answer27 = [
            ' الحدبتان التوءميتان',
            ' السويقتان المخيتان',
            ' الحدبة الحلقية',
            ' البصلة السيسائية '
        ];
        $answer28 = [
            ' قليلة الاستطالات ',
            'النجمية',
            'الصغيرة',
            ' البطانة العصبية '
        ];
       
        $index = ['0', '0', '1', '0'];
        foreach ($answer1 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '1'
            ]);
        }
        foreach ($answer2 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '2'
            ]);
        }
        foreach ($answer3 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '3'
            ]);
        }
        foreach ($answer4 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '4'
            ]);
        }
        foreach ($answer5 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '5'
            ]);
        }
        
        foreach ($answer6 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => 6
            ]);
        }
        foreach ($answer7 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => 7
            ]);
        }
        foreach ($answer8 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => 8
            ]);
        }
        foreach ($answer9 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => 9
            ]);
        }
        foreach ($answer10 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => 10
            ]);
        }
        foreach ($answer11 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '11'
            ]);
        }
        foreach ($answer12 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '12'
            ]);
            
        }
        foreach ($answer13 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '13'
            ]);
            
        }
        foreach ($answer14 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '14'
            ]);
            
        }
        foreach ($answer15 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '15'
            ]);
            
        }
        foreach ($answer16 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '16'
            ]);
            
        }
        foreach ($answer17 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '17'
            ]);
            
        }
        foreach ($answer18 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '18'
            ]);
            
        }
        foreach ($answer19 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '19'
            ]);
            
        }
        foreach ($answer20 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '20'
            ]);
            
        }
        foreach ($answer21 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '21'
            ]);
            
        }
        foreach ($answer22 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '22'
            ]);
            
        }
        foreach ($answer23 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '23'
            ]);
            
        }
        foreach ($answer24 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '24'
            ]);
            
        }
        foreach ($answer25 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '25'
            ]);
            
        }
        foreach ($answer26 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '26'
            ]);
            
        }
        foreach ($answer27 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '27'
            ]);
            
        }
        foreach ($answer28 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '28'
            ]);
            
        }

    }
}
