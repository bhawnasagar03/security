<?php

namespace App\Http\Controllers;

use Mail;
use Auth;
use Session;
use App\User;
use App\GuardCancel;
use App\GuardProfile;
use App\AddToWishlist;
use App\PreferedLocation;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;


class SignupAuthController extends Controller
{
    // use RegistersUsers;

     /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct(User $user, GuardProfile $guardProfile, PreferedLocation $preferedLocation, AddToWishlist $addToWishlist, GuardCancel $guardCancel)
    {
        $this->user             = $user;
        $this->guardProfile     = $guardProfile;
        $this->preferedLocation = $preferedLocation;
        $this->addToWishlist    = $addToWishlist;
        $this->guardCancel      = $guardCancel;

        // $this->middleware('auth');

    }

     public function showData()
    {
        return redirect(route('home')); 
    }
    

    public function index()
    {
            $data = $this->user
            ->where('userType', 1)
            ->with('guardProfile')->get();

            $data2=$this->addToWishlist->get();
            $data3=$this->guardCancel->get();

            if (count($data)>0)
            {
            return view('home', [
                    'data'  =>$data,
                    'data2' =>$data2,
                    'data3' =>$data3,

                ]);
            }
            else
            {
                return view('errorMessages.guardNotAvailable');
            }
    }

}




