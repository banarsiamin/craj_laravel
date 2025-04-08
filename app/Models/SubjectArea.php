<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectArea extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];
    
    /**
     * Get the articles associated with this subject area
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'subject_area_article');
    }
}
