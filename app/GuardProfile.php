<?php

namespace App;

use App\User;
use App\Location;
use Illuminate\Database\Eloquent\Model;


class GuardProfile extends Model
{

	protected $table = 'guard_profiles';
	public $guarded=[];

    protected $fillable = [
        'user_id','jobType','exProfession','qualification', 'language','image','licence',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
