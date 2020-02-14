<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
     protected $fillable = array('day' , 'description');
}
