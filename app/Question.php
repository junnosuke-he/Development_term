<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
     public static $rules = array(
        'title' => 'required',
        'text' => 'required',
         );
         protected $guarded = array('id');
}
