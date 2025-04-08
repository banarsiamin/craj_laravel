<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleView extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'ip_address',
        'user_agent',
        'viewed_at',
    ];

    protected $casts = [
        'viewed_at' => 'datetime',
    ];

    /**
     * Get the article that was viewed
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    
    /**
     * Scope a query to find views from a specific IP for a specific article
     */
    public function scopeForArticleAndIp($query, $articleId, $ipAddress)
    {
        return $query->where('article_id', $articleId)
                    ->where('ip_address', $ipAddress);
    }
} 