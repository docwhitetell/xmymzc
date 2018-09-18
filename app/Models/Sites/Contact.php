<?php

namespace App\Models\Sites;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = "website_contact";

    protected $fillable = [
        'type', 'title', 'value',
    ];
}
