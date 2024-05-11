<?php

namespace Database\Seeders;

use App\Models\Book_url;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url='http://127.0.0.1:8000/file/books/';
        Book_url::create([
        'name'=>'كتاب العلوم',
        'url'=>$url.'كتاب العلوم.pdf', 
        'material_id'=> '5' 
        ]);
    }
}
