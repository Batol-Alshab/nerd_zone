<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'title'=>'السؤال الاول',
            'content' => 'الجينوم هو',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'الموقع الذي تمتص فيه الطاقة الضةئية في الصانعان الخضراء',
            'modul_id'=>'1'

        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'النباتات اليفة الظل',
            'modul_id'=>'1'

        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'المرض الناتج عن خلل الاوردة هو',
            'modul_id'=>'1'

        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'تمثل موجة QRS في مخطط كهربائية القلب',
            'modul_id'=>'1'

        ]);
        Question::create([
            'title'=>'السؤال الاول',
            'content' => 'من اعراض الذبحة الصدرية',
            'modul_id'=>'2'

        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'العقدة الجيبية الاذينية',
            'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'تمثل الموجةP في مخطط كهربائية القلب',
            'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'الغشاء الذي يبطن تجاويف القلب يسمى',
            'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الخامص',
            'content' => 'الانقسام اللاكوكبي يحدث في',
            'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الاول',
            'content' => ' يتم تنظيم المنعكسات السمعية والبصرية بواسطة',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' =>' زمن لايحدث من دونه أي تنبيه مهما ارتفعت شدة المنبه',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => ' تعد مركز التحكم بالفعاليات الأخلاقية',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => ' أحد هذه العصبونات ليس من المسلك الحسي للمس الدقيق الصاعد',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' بنية تؤمن التواصل بين نصفي الكرة المخية بمادتها البيضاء',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => ' احدى البنى الآتية يصل الحدبة الحلقية بالنخاع الشوكي',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => ' ينفتح البطين الرابع على الحيز تحت العنكبوتي عبر',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الاول',
            'content' => ' يثبط نشوء كمون عمل في الغشاء بعد المشبكي',
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => ' زمن محدد لايحدث من دونه أي تنبيه مهما ارتفعت شدة المنبه',
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => ' تكون الألياف العصبية مجردة من النخاعين ومغمدة بشوان فقط في',
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => ' احدى البنى الآتية تعد طريقاً لنقل السيالة بين المخ والمخيخ',
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' خلايا دبقية عصبية تحيط  بأجسام العصبونات في العقد العصبية الكبيرة',
            'modul_id'=>'4'
        ]);
        
        Question::create([
            'title'=>'السؤال الاول',
            'content' => ' أحد البنى الآتية يعد مركز التحكم بالمنعكسات السمعية والبصرية',
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => ' خلايا دبقية تقوم ببلعمة العلتالفة والخلايا الصبونات اغريبة ',
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => ' تقع العصبونات متعددة القطبية النجمية',
            'modul_id'=>'5'
        ]);     
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => ' من البنى التي تقع فيها عصبونات ثنائية القطب',
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' احدى البنى الآتية من مادة بيضاء وتعد طريقاً لنقل السيالة العصبية المحركة الصادرة عن النخاع',
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => ' أحد خلايا الدبق العصبي تقوم بتشكيل غمد النخاعين حول محاوير الخلايا العصبية في المادة البيضاء ',
            'modul_id'=>'5'
        ]); 

    }
}
