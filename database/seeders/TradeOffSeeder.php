<?php

namespace Database\Seeders;

use App\Models\TradeOff;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TradeOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url='http://127.0.0.1:8000/file/tradeOffs/';
        TradeOff::create([
            'name'=>'المفاضلة الأولى',
            'url'=>$url.'المفاضلة الأولى  .pdf', 
            'section_id'=> '1' 
            ]);
    }
}
