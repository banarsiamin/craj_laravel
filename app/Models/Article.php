<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'author_name',
        'email',
        'affiliation',
        'country',
        'keywords',
        'category',
        'volume',
        'issue',
        'doi',
        'page_no',
        'manuscript_path',
        'cover_letter_path',
        'is_published',
        'published_date',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_date' => 'date',
        'views' => 'integer',
    ];

    /**
     * Get the categories as an array
     */
    public function getCategoriesAttribute(): array
    {
        return explode(',', $this->category);
    }

    /**
     * Get the keywords as an array
     */
    public function getKeywordsArrayAttribute(): array
    {
        return array_map('trim', explode(',', $this->keywords));
    }

    /**
     * Increment the view count
     */
    public function incrementViews(): void
    {
        $this->increment('views');
    }

    /**
     * Scope a query to only include published articles
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include articles by volume and issue
     */
    public function scopeByVolumeAndIssue($query, $volume, $issue)
    {
        return $query->where('volume', $volume)
                     ->where('issue', $issue);
    }
}
