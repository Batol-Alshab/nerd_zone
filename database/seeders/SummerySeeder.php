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
            'name'=>'ملخص عصبية',
            'url'=>$url.'ملخص عصبية.pdf', 
            'unit_id'=> '1' 
            ]);
        Summery::create([
            'name'=>'ملخص مستقبلات',
            'url'=>$url.'ملخص مستقبلات.pdf', 
            'unit_id'=> '1' 
            ]);
    }
}
