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
            'الحدبات',
            'الوطاء',
            ' الحدبة الحلقية',
            'المهاد'
        ];
        $answer2 = [
            'الزمن المفيد الأساسي ',
            'الكروناكسي',
            ' زمن الاستنفاد',
            'زمن الامتناع '
        ]; 
        $answer3 = [
            'بروكا ',
            'فيرنكا ',
            'الترابط أمام الجبهية',
            'الترابط الحافية'
        ];
        $answer4 = [
            'عصبون جسمه في  العقدة ',
            'عصبون جسمه في المهاد ',
            'عصبون جسمه في البصلة السيسائية ',
            'عصبون جسمه في المادة الرمادية للنخاع الشوكي'
        ];
        $answer5 = [
            'المهاد ',
            'الحدبة الحلقية ',
            'الحدبات التوأمية الأربعة',
            'الجسم الثفني'
        ];
        $answer6 = [
            'البصلة السيسائية',
            'الحصين ',
            'الحدبات التوأمية الأربعة',
            'الجسم الثفني'
        ];
        $answer7 = [
            'قناة سلفيوس ',
            'قناة السيساء',
            'فرجتا مونرو ',
            'ثقب ماجندي وثقبا لوشكا'
        ];
        $answer8 = [
            'فرط الاستقطاب',
            'زوال استقطاب',
            'انعكاس استقطاب',
            'انخفاض الاستقطاب'
        ];
        $answer9 = [
            'مفيد ',
            'مفيد أساسي',
            'استنفاد ',
            'كروناكسي'
        ];
        $answer10 = [
            'الشوكي ',
            'الشمي',
            'الوركي',
            'البصري'
        ];
//////////////////////////////////////////////////////
        $answer11 = [
            ' الحدبتان التوءميتان ',
            ' السويقتان المخيتان',
            ' الحدبة الحلقية ',
            ' البصلة السيسائية '
        ];
        $answer12 = [
            'نجمية ',
            'ساتلة',
            'شوان',
            'قليلة الاستطالات'
        ];
        $answer13 = [
            'الحدبات التوءمية ',
            'السويقتين المخيتان ',
            'الحدبة الحلقية',
            ' البصلة السيسائية '
        ];
        $answer14 = [
            'قليلة الاستطالات  ',
            'النجمية ',
            'الصغيرة ',
            'البطانة العصبية'
        ];
        $answer15 = [
            'القرنين األماميان في النخاع الشوكي ',
            'العقدة الشوكية والبطانة العصبية',
            'قشرة المخ وبعض أعضاء الحواس ',
            'قشرة المخيخ وشبكية العين'
        ];
        $answer16 = [
            'العقد العصبية ',
            'شبكية العين',
            'القشرة المخية',
            'القرنان األماميان للنخاع الشوكي'
        ];
        $answer17 = [
            'الحدبات التوءمية ',
            'السويقتين المخيتان ',
            'الحدبة الحلقية',
            ' البصلة السيسائية '
        ];
        $answer18 = [
            'الصغيرة  ',
            'قليلة الاستطالات',
            'النجمية',
            'البطانة العصبية '
        ];

        $answer19 = [
            'الشمية',
            'البصرية',
            'الذوقية',
            'الالية'
        ];    
        $answer20 = [
            'باشيني',
            'روفيني',
            'كراوس',
            'مايسنر'
        ];
        /////// نهاية اجوبة النموذج الثاني وحدة العصبية مقفول
        $answer21 = [
            'نهايات عصبية حرة في البشرة',
            'أقراص ميركل',
            'جسيم باشيني',
            'جسيمات مايسنر'
        ];
        $answer22 = [
            'الشمية',
            'البصرية',
            'الذوقية',
            'الالية'
        ];    
        $answer23 = [
            'باشيني',
            'روفيني',
            'كراوس',
            'مايسنر'
        ];
        $answer24 = [
            'مايسنر',
            'أقراص ميركل',
            'روفيني',
            'كراوس'
        ];
        $answer25 = [
            'دخول شوارد الصوديوم إلى القطعة الخارجية',
            'يستمر خروج شوارد الصوديوم من القطعة الداخلية',
            'يتوقف تحرير الناقل العصبي الغلوتامات',
            'يحدث فرط استقطاب في غشاء القطعة الخارجية'
        ];
        $answer26 = [
            'جسيمات مايسنر',
            'التهايات العصبية الحرة',
            'جسيمات روفيني',
            'أقراص ميركل'
        ];
        $answer27 = [
            'شولتز',
            'بومان',
            'التاجية',
            'القاعدية'
        ];
        $answer28 = [
            'الالم',
            'اللمس',
            'البرودة',
            'الضغط'
        ];
        $answer29 = [
            'خلايا شولتز',
            'الكبيبة',
            'الخلايا التاجية',
            'غددبومان'
        ];
        $answer30 = [
            'قاعدية',
            'تاجية',
            'استنادية',
            'النجمية'
        ];
        //////////////////
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
        //// نهاية النموذج الاول من الوحدة العصبية مفتوح 
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
        foreach ($answer29 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '29'
            ]);
            
        }
        foreach ($answer30 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '30'
            ]);
            
        }

    }
}
