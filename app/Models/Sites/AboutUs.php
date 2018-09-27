<?php

namespace App\Models\Sites;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    //
    protected $table = "about_us";

    protected $fillable = [
        'title', 'title_style', 'description', 'description_style', 'content','content_style','background_color','background_img'
    ];

    public function translate(){
        $this->title_style = json_decode($this->title_style);
        $this->description_style = json_decode($this->description_style);
        $this->content_style = json_decode($this->content_style);
        return $this;
    }
}
