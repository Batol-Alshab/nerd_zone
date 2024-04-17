<?php

namespace App\Models;

use App\Models\Term;
use App\Models\Section;

use App\Models\Book_url;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function book_urls()
    {
        return $this->hasMany(Book_url::class);
    }
    public function terms()
    {
        return $this->hasMany(Term::class);
    }
}
