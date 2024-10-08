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
            'title'=>'السؤال الأول',
            'content' => 'يتم تنظيم المنعكسات السمعية والبصرية بواسطة',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => ' زمن اليحدث من دونه أي تنبيه مهما ارتفعت شدة المنبه',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'تعد مركز التحكم بالفعاليات األخالقية',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'أحد هذه العصبونات ليس من المسلك الحسي للمس الدقيق الصاعد ',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'بنية تؤمن التواصل بين نصفي الكرة المخية بمادتها البيضاء',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'احدى البنى اآلتية يصل الحدبة الحلقية بالنخاع الشوكي',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => 'ينفتح البطين الرابع على الحيز تحت العنكبوتي عبر',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' => 'يثبط نشوء كمون عمل في الغشاء بعد المشبكي',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'زمن محدد اليحدث من دونه أي تنبيه مهما ارتفعت شدة المنبه ',
           'modul_id'=>'1'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' => 'تكون األلياف العصبية مجردة من النخاعين ومغمدة بشوان فقط في',
           'modul_id'=>'1'
        ]);
        /////// نهاية اسئلة النموذج الاول وحدة العصبية مفتوح
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'احدى البنى الاتية تعد طريقاً لنقل السيالة بين المخ والمخيخ',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'خاليا دبقية عصبية تحيط بأجسام العصبونات في العقد العصبية الكبيرة',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'أحد البنى الاتية يعد مركز التحكم بالمنعكسات السمعية والبصرية',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'خاليا دبقية تقوم ببلعمة العصبونات التالفة والخلايا الغريبة',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'تقع العصبونات متعددة القطبية النجمية',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'من البنى التي تقع فيها عصبونات ثنائية القطب',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => 'احدى البنى اآلتية من مادة بيضاء وتعد طريقاً لنقل السيالة العصبية المحركة الصادرة عن النخاع ',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' => 'أحد خاليا الدبق العصبي تقوم بتشكيل غمد النخاعين حول محاوير الخلايا العصبية في المادة البيضاء',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'احدى هذه المتسقبلات ثانوية',
           'modul_id'=>'2'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' =>'احدى الجسيمات الحسية الاتية يعد مستقبالً للمس الدقيق',
           'modul_id'=>'2'
        ]);
        /////// نهاية اسئلة النموذج الثاني وحدة العصبية مقفول
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'احدى هذه المستقبلات ليس لها دور في إلاحساس باللمس',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'احدى هذه المستقبلات ثانوية',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'احدى الجسيمات الحسية الاتية يعد مستقبالً للمس الدقيق',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'جسيمات حسية تغرز في رؤوس ألاصابع والشفاه وراحة اليدين',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'جميع العبارات الاتية صحيحة في عمل العصية في الضوء الضعيف ماعدا',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'يستهدف ألاطباء في التخدير الموضعي في بعض العمليات الجراحية البسيطة احدى البني الاتية في الجلد',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => 'احدى الخلايا الاتية تشمل محاويرها ألياف العصب الشمي',  
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' => 'يعد جسيم باشيني مستقبالً آلياً لل',
            'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'بنى تنتشر بين الخلايا الحسية الشمية وتفرز المادة المخاطية',
           'modul_id'=>'3'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' => 'الخلايا الحسية الشمية تعوضها',
           'modul_id'=>'3'
        ]);
        /////// نهاية اسئلة النموذج الاول وحدة المستقبلات مفتوح

        Question::create([
            'title'=>'السؤال الأول',
            'content' => ' يوجد امام واسفل كل نصف كرة مخية',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'احد هذه الأمثلة اليافه مغمدة بغمد النخاعين فقط',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'خلية دبقية لها دور مهم في إعادة امتصاص النواقل العصبية الكيميائية بعد أن تؤدي دورها في الفالق المشبكي',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'الناقل العصبي بين عصبون ودي ولب الكظر هو',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'زمن محدد دونه لا يحدث تنبيه',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'توجد في غشاء الليف تفتح عندما يرتبط بها الناقل العصبي',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => '  دور الكالسيوم عندما يتحرر من قناته التبويب الكيميائية',  
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' => ' تعد مركز التحكم بالقيم الاجتماعية',
            'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => ' العصبون الثالث في مسلك حس الألم يوجد جسمه في',
           'modul_id'=>'4'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' => ' مركز تنظيم المنعكسات السمعية والبصرية',
           'modul_id'=>'4'
        ]);

        //////////////////////////
        Question::create([
            'title'=>'السؤال الأول',
            'content' => ' هو مرض يتميز بفقدان خاليا الدبق قليلة االستطاالت يظهر عند األشخاص بين 30 و 40 سنة',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'ضروري لحفظ توازن الجسم والحركات التلقائية',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'تقع امام شق روالندو مباشرة',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'لها دور في السلوك والدوافع الى عملية التعلم',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => 'هو مركز الخوف',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'مثالها هو حفظ رقم هاتف',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => 'بنى عصبية حركية تعمل مع الباحة المحركة والمخيخ للتحكم بالحركات المعقدة',  
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' => 'تشكل طريق لنقل السيالة العصبية بين المخ والمخيخ بمادتها البيضاء',
            'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'عدد العصبونات البينية قي قوس انعكاسي رباعي التشابك',
           'modul_id'=>'5'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' => 'سببه هو موت الخاليا العصبية في المادة السوداء',
           'modul_id'=>'5'
        ]);
        ///وطنية نموذج 12
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'أوضح مؤامرة أصابت العرب في العصر الحديث',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'جوهر التحليل السياسي هو الاجابة عن سؤال',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'من قواعد التحليل السياسي',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'من صفات المحلل السياسي ',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' إدراك الاسباب التي أدت إلى بروز الحدث',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'مصطلح العنف المنظم يراد به ',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => ' مشروع يهدف إلى إعادة رسم خارطة العالم العربي يدعى',  
            'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' =>'الوضع الذي يظهر فيه عدم التوافق في الاهداف والمصالح بين الاطراف',
            'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'من أسباب  النزاع ',
           'modul_id'=>'12'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' =>'من أسباب النزاع الدولي',
           'modul_id'=>'12'
        ]);

        ///وطنية نموذج 13
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'أوضح مؤامرة أصابت العرب في العصر الحديث',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'جوهر التحليل السياسي هو الاجابة عن سؤال',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'من قواعد التحليل السياسي',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'من صفات المحلل السياسي ',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' إدراك الاسباب التي أدت إلى بروز الحدث',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'مصطلح العنف المنظم يراد به ',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => ' مشروع يهدف إلى إعادة رسم خارطة العالم العربي يدعى',  
            'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' =>'الوضع الذي يظهر فيه عدم التوافق في الاهداف والمصالح بين الاطراف',
            'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'من أسباب  النزاع ',
           'modul_id'=>'13'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' =>'من أسباب النزاع الدولي',
           'modul_id'=>'13'
        ]);
        ///14
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'أوضح مؤامرة أصابت العرب في العصر الحديث',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'جوهر التحليل السياسي هو الاجابة عن سؤال',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'من قواعد التحليل السياسي',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'من صفات المحلل السياسي ',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' إدراك الاسباب التي أدت إلى بروز الحدث',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'مصطلح العنف المنظم يراد به ',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => ' مشروع يهدف إلى إعادة رسم خارطة العالم العربي يدعى',  
            'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' =>'الوضع الذي يظهر فيه عدم التوافق في الاهداف والمصالح بين الاطراف',
            'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'من أسباب  النزاع ',
           'modul_id'=>'14'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' =>'من أسباب النزاع الدولي',
           'modul_id'=>'14'
        ]);
        ///وطنية نموذج 15
        Question::create([
            'title'=>'السؤال الأول',
            'content' => 'أوضح مؤامرة أصابت العرب في العصر الحديث',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال الثاني',
            'content' => 'جوهر التحليل السياسي هو الاجابة عن سؤال',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال الثالث',
            'content' => 'من قواعد التحليل السياسي',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال الرابع',
            'content' => 'من صفات المحلل السياسي ',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال الخامس',
            'content' => ' إدراك الاسباب التي أدت إلى بروز الحدث',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال السادس',
            'content' => 'مصطلح العنف المنظم يراد به ',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال السابع',
            'content' => ' مشروع يهدف إلى إعادة رسم خارطة العالم العربي يدعى',  
            'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال الثامن',
            'content' =>'الوضع الذي يظهر فيه عدم التوافق في الاهداف والمصالح بين الاطراف',
            'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال التاسع',
            'content' => 'من أسباب  النزاع ',
           'modul_id'=>'15'
        ]);
        Question::create([
            'title'=>'السؤال العاشر',
            'content' =>'من أسباب النزاع الدولي',
           'modul_id'=>'15'
        ]);



    }
}
