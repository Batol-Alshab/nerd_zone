<?php

namespace Database\Seeders;

use App\Models\Summery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SummerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url='http://127.0.0.1:8000/file/summeries/';
        Summery::create([
            'name'=>' ملخص عصبيةالجزء الأول',
            'url'=>$url.'ملخص عصبية.pdf', 
            'unit_id'=> '1' 
            ]);
        Summery::create([
            'name'=>' ملخص عصبيةالجزء الثاني',
            'url'=>$url.'ملخص مستقبلات.pdf', 
            'unit_id'=> '1' 
            ]);
        Summery::create([
                'name'=>'ملخص مستقبلات',
                'url'=>$url.'ملخص مستقبلات.pdf', 
                'unit_id'=> '2' 
            ]);
        Summery::create([
                'name'=>'ملخص عاريات ومغلفات',
                'url'=>$url.'ملخص عاريات ومغلفات.pdf', 
                'unit_id'=> '3' 
            ]);
        Summery::create([
                'name'=>'ملخص تطوير الذات الجزء الأول',
                'url'=>$url.'ملخص تطوير الذات الجزء الأول.pdf', 
                'unit_id'=> '8' 
            ]);
        Summery::create([
                'name'=>'ملخص تطوير الذات الجزء الثاني',
                'url'=>$url.'ملخص تطوير الذات الجزء الثاني .pdf', 
                'unit_id'=> '8' 
            ]);
    }
}
