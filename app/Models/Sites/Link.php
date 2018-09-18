<?php

namespace App\Models\Sites;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $table = "website_link";

    protected $fillable = [
        'title', 'value',
    ];
}
