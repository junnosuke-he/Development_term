<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // 
    protected $guarded = array('id');
    
    public static $rules = array(
        'game_title' => 'required',
        'text' => 'required',
        );
}
