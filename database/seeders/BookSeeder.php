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
        Book_url::create([
        'name'=>'العصبية',
        'url'=>'العصبية.pdf', 
        'material_id'=> '5' 
        ]);
        Book_url::create([
        'name'=>'المستقبلات',
        'url'=>'المستقبلات.pdf', 
        'material_id'=> '5' 
        ]);
    }
}
