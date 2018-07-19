<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuardCancel extends Model
{
   protected $table = 'cancel_guards';
     protected $fillable = [

    	'user_id','guard_id','cancel_id',
    ];
}
