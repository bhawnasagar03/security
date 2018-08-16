<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWishlist extends Model
{
    protected $table= 'wishlists';

    protected $fillable=['user_id','guard_id'];
}
