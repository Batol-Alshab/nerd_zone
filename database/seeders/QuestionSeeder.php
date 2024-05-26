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
            'title'=>'السؤال السادس',
            'content' => 'يسمى التفاف حلزون الDNA',
            'modul_id'=>'2'
        ]);
    }
}
