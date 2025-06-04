<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    protected $fillable = [
        'company_name',
        'logo',
        'hero_title',
        'hero_subtitle',
        'about_us',
        'join_us_call',
        'footer',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
