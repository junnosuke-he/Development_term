<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // 
    public static $rules = array(
        'game_title' => 'required',
        'text' => 'required',
        );
}
