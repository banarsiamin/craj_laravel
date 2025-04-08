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
        'references',
        'author_contributor_list',
        'author_name',
        'email',
        'affiliation',
        'country',
        'content',
        'doi',
        'pdf_file',
        'html_file',
        'docx_file',
        'html_content',
        'keywords',
        'category',
        'volume',
        'issue',
        'pages',
        'published_date',
        'has_permissions',
        'license_url',
        'copyright_holder',
        'copyright_year',
        'featured_image',
        'manuscript_path',
        'cover_letter_path',
        'is_published',
        'status',
        'views',
        'likes',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'has_permissions' => 'boolean',
        'published_date' => 'date',
        'views' => 'integer',
        'copyright_year' => 'integer',
        'likes' => 'integer',
    ];

    /**
     * Get the categories as an array
     */
    public function getCategoriesAttribute(): array
    {
        return explode(',', $this->category ?? '');
    }

    /**
     * Get the keywords as an array
     */
    public function getKeywordsArrayAttribute(): array
    {
        return array_map('trim', explode(',', $this->keywords ?? ''));
    }

    /**
     * Increment the view count
     */
    public function incrementViews(): void
    {
        $this->increment('views');
    }

    /**
     * Increment the like count
     */
    public function incrementLikes(): void
    {
        $this->increment('likes');
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

    /**
     * Get the issues that this article belongs to
     */
    public function issues()
    {
        return $this->belongsToMany(Issue::class, 'article_issue')
                    ->withPivot('order')
                    ->withTimestamps();
    }
    
    /**
     * Get the subject areas that this article belongs to
     */
    public function subjectAreas()
    {
        return $this->belongsToMany(SubjectArea::class, 'subject_area_article');
    }

    /**
     * Get the views for this article
     */
    public function views()
    {
        return $this->hasMany(ArticleView::class);
    }

    /**
     * Record a view from a specific IP
     */
    public function recordView($ipAddress, $userAgent = null): bool
    {
        // Check if this IP has already viewed this article in the last 24 hours
        $existingView = $this->views()
            ->forArticleAndIp($this->id, $ipAddress)
            ->where('viewed_at', '>=', now()->subHours(24))
            ->first();
        
        if ($existingView) {
            return false; // View already recorded within 24 hours
        }
        
        // Record new view
        $this->views()->create([
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'viewed_at' => now(),
        ]);
        
        // Increment the view count
        $this->increment('views');
        
        return true;
    }
}
