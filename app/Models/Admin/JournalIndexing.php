<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class JournalIndexing extends Model
{
    protected $fillable = [
        'title',
        'image',
        'link',
        'status',
        'order'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
