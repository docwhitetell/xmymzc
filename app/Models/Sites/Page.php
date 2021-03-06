<?php

namespace App\models\Sites;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "page";

    protected $fillable = [
        'page',
        'title', 'title_font_size', 'title_font_color', 'title_animation_in','title_animation_out','title_animation_delay','title_animation_duration',
        'description', 'desc_font_size', 'desc_font_color', 'desc_animation_in','desc_animation_out','desc_animation_delay','desc_animation_duration',
        'content', 'content_font_size', 'content_font_color', 'content_animation_in','content_animation_out','content_animation_delay','content_animation_duration',
        'background_type', 'background'
    ];
}
