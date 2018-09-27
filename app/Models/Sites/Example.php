<?php

namespace App\models\Sites;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table = "example";

    protected $fillable = [
        'type','title','description','poster','link','downloads'
    ];
}
