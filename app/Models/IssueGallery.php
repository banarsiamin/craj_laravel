<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id',
        'image_path',
        'caption',
        'order'
    ];

    /**
     * Get the issue that owns the gallery image
     */
    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
} 