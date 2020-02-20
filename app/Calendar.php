<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
     protected $guarded = array('id');
     
     public static $rules = array(
         'day' => 'required',
         'description' => 'required',
         );
}
