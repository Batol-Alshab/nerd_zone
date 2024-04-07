<?php

namespace Database\Seeders;

use App\Models\OpenQuestion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OpenQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OpenQuestion::create([
            'content' => 'الجينوم هو',
            'model' => 'النموذج الاول',
            'unit_id' => '1'
        ]);
        OpenQuestion::create([
            'content' => 'الموقع الذي تمتص فيه الطاقة الضةئية في الصانعان الخضراء',
            'model' => 'النموذج الاول',
            'unit_id' => '1'

        ]);
        OpenQuestion::create([
            'content' => 'النباتات اليفة الظل',
            'model' => 'النموذج الاول',
            'unit_id' => '1'

        ]);
        OpenQuestion::create([
            'content' => 'المرض الناتج عن خلل الاوردة هو',
            'model' => 'النموذج الاول',
            'unit_id' => '1'

        ]);
        OpenQuestion::create([
            'content' => 'تمثل موجة QRS في مخطط كهربائية القلب',
            'model' => 'النموذج الاول',
            'unit_id' => '1'

        ]);
        OpenQuestion::create([
            'content' => 'من اعراض الذبحة الصدرية',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'

        ]);
        OpenQuestion::create([
            'content' => 'العقدة الجيبية الاذينية',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'
        ]);
        OpenQuestion::create([
            'content' => 'تمثل الموجةP في مخطط كهربائية القلب',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'
        ]);
        OpenQuestion::create([
            'content' => 'الغشاء الذي يبطن تجاويف القلب يسمى',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'
        ]);
        OpenQuestion::create([
            'content' => 'الانقسام اللاكوكبي يحدث في',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'
        ]);
        OpenQuestion::create([
            'content' => 'يسمى التفاف حلزون الDNA',
            'model' => 'النموذج الثاني',
            'unit_id' => '1'
        ]);
    }
}
