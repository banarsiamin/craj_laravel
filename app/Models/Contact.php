<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'phone',
        'organization',
        'country',
        'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean'
    ];
}
