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
        $answer31 = [
            'تصالب العصبين البصريين',
            'الجسم المخطط',
            'الوطاء',
            'الفص الشمي'
        ];
        $answer32 = [
            ' العصب الوركي',
            '  العصب الشمي',
            ' المادة الرمادية',
            ' العصب البصري'
        ];
        $answer33 = [
       ' الدبقية النجمية',
        ' الدبقية الصغيرة',
        ' الدبقية الساتلة',
        ' الدبقية قليلة الاستطالات'
        ];
        $answer34 = [
           ' نورادرينالين',
           ' استيل كولين',
            'دوبامين',
           ' الخيار الاول والثالث'
        ];
        $answer35 = [
            'الريوباز',
            'الاستنفاد',
           ' المفيد الاساسي',
            'الكروناكسي'
        ];
        $answer36 = [
           ' التسرب البروتينية',
           ' التبويب الفولطية',
           ' التبويب الكيميائية',
           ' مضخة الصوديوم والبوتاسيوم'        
        ];
        $answer37 = [
            'اندماج الحويصلات المشبكية مع الغشاء قبل المشبكي',
            'تشكيل EPSP',
            'تحرير النواقل العصبية في الفالق المشبكي',
           ' الخيار الأول و الثالث'
        ];
        $answer38 = [
           ' باحة فيرنكه',
            'باحة الترابط الحافية',
            'باحة الترابط الجدارية القفوية الصدغية',
            'لا شيء صحيح'
        ];
        $answer39 = [
            'البصلة السيسائية',
            'المهاد',
            'العقدة الشوكية',
            'النخاع الشوكي'
        ];
        $answer40 = [
           ' السويقة المخية',
           ' الحدبة الحلقية',
           ' الحدبات التوءمية الاربعة',
            'الوطاء'
        ];
        ////////////////////////
        $answer41 = [
            'الشقيقة',
            'باركنسون',
            'الصرع',
           ' التصلب اللويحي المتعدد'
        ];
        $answer42 = [
            'المهاد',
            'الوطاء',
            'الجسم المخطط',
            'قشرة المخ'

        ];
        $answer43 = [    
            'الباحة المحركة الاولية',
            'الباحة الحسية الجسمية الأولية',
            'الباحة المحركة الثانوية',
            'الباحة البصرية الاولية'
        ];
        $answer44 = [
           ' باحة فيرنكه',
            'باحة ترابط امام جبهية',
            'باحة ترابط حافية',
            'باحة ترابط جدارية قفوية صدغية'
        ];
        $answer45 = [
           ' البصلة السيسائية',
           ' النخاع الشوكي',
           ' الوطاء',
            'المهاد'
        ];
        $answer46 = [
           ' الذاكرة الحسية',
            'الذاكرة قصيرة الامد',
            'الذاكرة طويلة الامد',
            'المرونة العصبية'
        ];
        $answer47 = [
           ' الحدبات التوءمية الاربعة',
            'البصلة السيسائية بمادتها الرمادية',
           ' النخاع الشوكي بمادته البيضاء',
           ' النوى القاعدية'
        ];
        $answer48 = [
           ' البصلة السيسائية',
            'جسر فارول',
            'الاعصاب الشوكية',
            'السويقة المخية'
        ];
        $answer49 = [
            '2',
            '3',
            '4',
            '5'
        ];
        $answer50 = [    
            'الزهايمر',
            'باركنسون',
            'التصلب اللويحي المتعدد',
            'الشقيقة'
        ];
        //////////////////
        //وطنية عند سؤال 51 نموذج 12
        $answer51 = [
           ' اتفاقية وادي',
            '  اتفاقية اوسلو ',
             ' اتفاقية كامب ديفيد  ',
             ' اتفاقية سايكس بيكو'
        ];
        $answer52 = [
           ' ماذا حدث',
            ' لماذا حدث',
          'كان حدث',
              ' ماذا سيحدث'
        ];
        $answer53 = [
           ' التمتع بالتفكير النقدي و التحليلي',
            ' التحيز في تحليل الاحداث',
            '  ادراك طبيعة المصالح',
              ' الابتعاد عن الاحكام المطلقة '
        ];
        $answer54 = [
           ' خدمة الوطن',
            ' التحيز في التحليل',
             ' الاخذ بالاحكام المطلقة',
              ' التمتع بالتفكير النقدي و التحليلي'
        ];
        $answer55 = [
           ' ماذا حدث',
           ' لماذا حدث',
         'كان حدث',
             ' ماذا سيحدث'
        ];
        $answer56 = [
          '  الارهاب',
             'الحرب',
             ' القتال الاهلي',
              ' العنف المسلح'
        ];
        $answer57 = [
           ' النظام العالمي الحديث',
            ' النظام العالمي الجديد',
             ' النظام العالمي التلقائي',
              ' النظام العالمي التقليدي'
        ];
        $answer58 = [
            'التناقض',
             'الإدراك',
              'السلوك',
               'التلقائية'
        ];
        $answer59 = [
            'الموارد',
           '  اختالف الحاجات',
              'المواقع',
               'العولمة'
        ];
        $answer60 = [
            'الموارد',
            ' اختالف وجهات النظر',
             ' اختالف المصالح',
              ' التعدي على الحقوق المكتسبة '
        ];
        //

        //وطنية عند سؤال 61 نموذج 13
        $answer61 = [
            ' اتفاقية وادي',
             '  اتفاقية اوسلو ',
              ' اتفاقية كامب ديفيد  ',
              ' اتفاقية سايكس بيكو'
         ];
         $answer62 = [
            ' ماذا حدث',
             ' لماذا حدث',
           'كان حدث',
               ' ماذا سيحدث'
         ];
         $answer63 = [
            ' التمتع بالتفكير النقدي و التحليلي',
             ' التحيز في تحليل الاحداث',
             '  ادراك طبيعة المصالح',
               ' الابتعاد عن الاحكام المطلقة '
         ];
         $answer64 = [
            ' خدمة الوطن',
             ' التحيز في التحليل',
              ' الاخذ بالاحكام المطلقة',
               ' التمتع بالتفكير النقدي و التحليلي'
         ];
         $answer65 = [
            ' ماذا حدث',
            ' لماذا حدث',
          'كان حدث',
              ' ماذا سيحدث'
         ];
         $answer66 = [
           '  الارهاب',
              'الحرب',
              ' القتال الاهلي',
               ' العنف المسلح'
         ];
         $answer67 = [
            ' النظام العالمي الحديث',
             ' النظام العالمي الجديد',
              ' النظام العالمي التلقائي',
               ' النظام العالمي التقليدي'
         ];
         $answer68 = [
             'التناقض',
              'الإدراك',
               'السلوك',
                'التلقائية'
         ];
         $answer69 = [
             'الموارد',
            '  اختالف الحاجات',
               'المواقع',
                'العولمة'
         ];
         $answer70 = [
             'الموارد',
             ' اختالف وجهات النظر',
              ' اختالف المصالح',
               ' التعدي على الحقوق المكتسبة '
         ];
         //وطنية عند سؤال 71 نموذج 14
        $answer71 = [
            ' اتفاقية وادي',
             '  اتفاقية اوسلو ',
              ' اتفاقية كامب ديفيد  ',
              ' اتفاقية سايكس بيكو'
         ];
         $answer72 = [
            ' ماذا حدث',
             ' لماذا حدث',
           'كان حدث',
               ' ماذا سيحدث'
         ];
         $answer73 = [
            ' التمتع بالتفكير النقدي و التحليلي',
             ' التحيز في تحليل الاحداث',
             '  ادراك طبيعة المصالح',
               ' الابتعاد عن الاحكام المطلقة '
         ];
         $answer74 = [
            ' خدمة الوطن',
             ' التحيز في التحليل',
              ' الاخذ بالاحكام المطلقة',
               ' التمتع بالتفكير النقدي و التحليلي'
         ];
         $answer75 = [
            ' ماذا حدث',
            ' لماذا حدث',
          'كان حدث',
              ' ماذا سيحدث'
         ];
         $answer76 = [
           '  الارهاب',
              'الحرب',
              ' القتال الاهلي',
               ' العنف المسلح'
         ];
         $answer77 = [
            ' النظام العالمي الحديث',
             ' النظام العالمي الجديد',
              ' النظام العالمي التلقائي',
               ' النظام العالمي التقليدي'
         ];
         $answer78 = [
             'التناقض',
              'الإدراك',
               'السلوك',
                'التلقائية'
         ];
         $answer79 = [
             'الموارد',
            '  اختالف الحاجات',
               'المواقع',
                'العولمة'
         ];
         $answer80 = [
             'الموارد',
             ' اختالف وجهات النظر',
              ' اختالف المصالح',
               ' التعدي على الحقوق المكتسبة '
         ];
         //وطنية عند سؤال 81 نموذج 15
        $answer81 = [
            ' اتفاقية وادي',
             '  اتفاقية اوسلو ',
              ' اتفاقية كامب ديفيد  ',
              ' اتفاقية سايكس بيكو'
         ];
         $answer82 = [
            ' ماذا حدث',
             ' لماذا حدث',
           'كان حدث',
               ' ماذا سيحدث'
         ];
         $answer83 = [
            ' التمتع بالتفكير النقدي و التحليلي',
             ' التحيز في تحليل الاحداث',
             '  ادراك طبيعة المصالح',
               ' الابتعاد عن الاحكام المطلقة '
         ];
         $answer84 = [
            ' خدمة الوطن',
             ' التحيز في التحليل',
              ' الاخذ بالاحكام المطلقة',
               ' التمتع بالتفكير النقدي و التحليلي'
         ];
         $answer85 = [
            ' ماذا حدث',
            ' لماذا حدث',
          'كان حدث',
              ' ماذا سيحدث'
         ];
         $answer86 = [
           '  الارهاب',
              'الحرب',
              ' القتال الاهلي',
               ' العنف المسلح'
         ];
         $answer87 = [
            ' النظام العالمي الحديث',
             ' النظام العالمي الجديد',
              ' النظام العالمي التلقائي',
               ' النظام العالمي التقليدي'
         ];
         $answer88 = [
             'التناقض',
              'الإدراك',
               'السلوك',
                'التلقائية'
         ];
         $answer89 = [
             'الموارد',
            '  اختالف الحاجات',
               'المواقع',
                'العولمة'
         ];
         $answer90 = [
             'الموارد',
             ' اختالف وجهات النظر',
              ' اختالف المصالح',
               ' التعدي على الحقوق المكتسبة '
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
        foreach ($answer31 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '31'
            ]);
            
        }
        foreach ($answer32 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '32'
            ]);
            
        }
        foreach ($answer33 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '33'
            ]);
            
        }
        foreach ($answer34 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '34'
            ]);
            
        }
        foreach ($answer35 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '35'
            ]);
            
        }
        foreach ($answer36 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '36'
            ]);
            
        }
        foreach ($answer37 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '37'
            ]);
            
        }
        foreach ($answer38 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '38'
            ]);
            
        }
        foreach ($answer39 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '39'
            ]);
            
        }
        foreach ($answer40 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '40'
            ]);
            
        }
        foreach ($answer41 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '41'
            ]);
            
        }
        foreach ($answer42 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '42'
            ]);
            
        }
        foreach ($answer43 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '43'
            ]);
            
        }
        foreach ($answer44 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '44'
            ]);
        
        }
        foreach ($answer45 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '45'
            ]);
            
        }
        foreach ($answer46 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '46'
            ]);
            
        }
        foreach ($answer47 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '47'
            ]);
            
        }
        foreach ($answer48 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '48'
            ]);
            
        }
        foreach ($answer49 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '49'
            ]);
            
        }
        foreach ($answer50 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '50'
            ]);
            
        }
        //////وطنية
        foreach ($answer51 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '51'
            ]);    
        }
        foreach ($answer52 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '52'
            ]);    
        }
        foreach ($answer53 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '53'
            ]);    
        }
        foreach ($answer54 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '54'
            ]);    
        }
        foreach ($answer55 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '55'
            ]);    
        }
        foreach ($answer56 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '56'
            ]);    
        }
        foreach ($answer57 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '57'
            ]);    
        }
        foreach ($answer58 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '58'
            ]);    
        }
        foreach ($answer59 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '59'
            ]);    
        }
        foreach ($answer60 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '60'
            ]);    
        }
        /// وطنية نموذج 13
        foreach ($answer61 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '61'
            ]);    
        }
        foreach ($answer62 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '62'
            ]);    
        }
        foreach ($answer63 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '63'
            ]);    
        }
        foreach ($answer64 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '64'
            ]);    
        }
        foreach ($answer65 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '65'
            ]);    
        }
        foreach ($answer66 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '66'
            ]);    
        }
        foreach ($answer67 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '67'
            ]);    
        }
        foreach ($answer68 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '68'
            ]);    
        }
        foreach ($answer69 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '69'
            ]);    
        }
        foreach ($answer70 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '70'
            ]);    
        }
        /// وطنية نموذج 14
        foreach ($answer71 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '71'
            ]);    
        }
        foreach ($answer72 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '72'
            ]);    
        }
        foreach ($answer73 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '73'
            ]);    
        }
        foreach ($answer74 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '74'
            ]);    
        }
        foreach ($answer75 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '75'
            ]);    
        }
        foreach ($answer76 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '76'
            ]);    
        }
        foreach ($answer77 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '77'
            ]);    
        }
        foreach ($answer78 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '78'
            ]);    
        }
        foreach ($answer79 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '79'
            ]);    
        }
        foreach ($answer80 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '80'
            ]);    
        }
        /// وطنية نموذج 15
        foreach ($answer81 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '81'
            ]);    
        }
        foreach ($answer82 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '82'
            ]);    
        }
        foreach ($answer83 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '83'
            ]);    
        }
        foreach ($answer84 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '84'
            ]);    
        }
        foreach ($answer85 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '85'
            ]);    
        }
        foreach ($answer86 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '86'
            ]);    
        }
        foreach ($answer87 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '87'
            ]);    
        }
        foreach ($answer88 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '88'
            ]);    
        }
        foreach ($answer89 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '89'
            ]);    
        }
        foreach ($answer90 as $indexKey => $ans) {
            Answer::create([
                'content' => $ans,
                'is_true' => $index[$indexKey],
                'question_id' => '90'
            ]);    
        }



    }
}
