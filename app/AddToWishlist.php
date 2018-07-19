<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddToWishlist extends Model
{
    protected $fillable = [

    	'user_id','guard_id','book_id',
    ];
}
