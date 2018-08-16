<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Auth;
use Session;
use App\User;
use App\Wishlist;
use App\GuardCancel;
use App\GuardProfile;
use App\AddToWishlist;
use App\Mail\cancelJob;
use App\Mail\GuardBook;
use App\Mail\JobDetails;
use App\PreferedLocation;
use App\Mail\cancelGuard;
use Illuminate\Http\Request;
use App\Notifications\Notifications;
use App\Http\Controller\SignupAuthController;
class ServiceController extends Controller
{
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

         // $this->middleware('auth:User');
    }

    public function aboutus()
    {
    	return view('service.aboutus');
    }

    public function service()
    {
    	return view('service.service');
    }

    public function team()
    {
    	return view('service.team');
    }

    public function blog()
    {
    	return view('service.blog');
    }

    public function contact()
    {
    	return view('service.contact');
    }

}
