<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuardBook extends Model
{
   protected $fillable = [
        'gfname','glname','email','phone','gender', 'exProfession','qualification',
    ];
}
