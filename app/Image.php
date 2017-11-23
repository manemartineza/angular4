<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = "imagens";
    //
    protected $filable = [
        'title','description','thumbnail','imageLink','user_id'
    ];
}
