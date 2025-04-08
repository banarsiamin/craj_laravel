<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'abstract', 
        'featured_image', 
        'order',
        'volume', 
        'number', 
        'year', 
        'access_status', 
        'open_access_date',
        'show_volume', 
        'show_number', 
        'show_year', 
        'show_access', 
        'show_title',
        'status'
    ];

    protected $casts = [
        'open_access_date' => 'date',
        'show_volume' => 'boolean',
        'show_number' => 'boolean',
        'show_year' => 'boolean',
        'show_access' => 'boolean',
        'show_title' => 'boolean',
    ];

    /**
     * Get the articles associated with this issue
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_issue')
                    ->withPivot('order')
                    ->orderBy('order');
    }

    /**
     * Get the gallery images for this issue
     */
    public function galleryImages()
    {
        return $this->hasMany(IssueGallery::class)->orderBy('order');
    }
} 