<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferedLocation extends Model
{
	protected $table = 'prefered_locations';

    protected $fillable = [

    	'user_id','guard_id','loc1','loc2','loc3','loc4',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
