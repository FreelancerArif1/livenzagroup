<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'top_title',
        'bottom_title',
        'button_text',
        'button_link',
        'image',
        'short_description',
        'description',
        'video',
        'youtube_video',
        'serial',
        'slier_for',
        'status',
    ];
}
