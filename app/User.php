<?php

namespace App;

use App\Loc;
use App\GuardProfile;
use Illuminate\Notifications\Notifiable;
use App\Notifications\UserPasswordResetNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     protected $guard='User';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userType','fname','lname','username','email', 'password','date','phone','gender','location','verifyToken',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserPasswordResetNotification($token));
    }

    public function guardProfile()
    {
        return $this->hasOne(GuardProfile::class);
    }

     public function preferedLocation()
    {
        return $this->hasOne(PreferedLocation::class);
    }

    public function is_admin()
    {
        if($this->userType)
        {
            return true;
        }
        return false;
    }

}
