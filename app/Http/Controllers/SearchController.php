<?php

namespace App\Http\Controllers;

use DB;
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


class SearchController extends Controller
{
     public function __construct(User $user, GuardProfile $guardProfile, PreferedLocation $preferedLocation, AddToWishlist $addToWishlist, GuardCancel $guardCancel)
    {
        $this->user             = $user;
        $this->guardProfile     = $guardProfile;
        $this->preferedLocation = $preferedLocation;
        $this->addToWishlist    = $addToWishlist;
        $this->guardCancel      = $guardCancel;

        // $this->middleware('auth');

    }

     public function index()
     {
        return view('layouts.headerFooter');
     }

      public function headView()
      {
        $data = $this->user
            ->where('userType', 1)
            ->with('GuardProfile')
            ->with('PreferedLocation')->get();

            if (count($data)>0)
            {
                return view('layouts/headerFooter',[ 
                    'data' => $data
                ]);
            }
            else
            {
                return redirect(route('signupSelection'))->with('message', 'You are no longer registered!.. Registered here');
            }
      }

      public function welcome()
      {
        return view('welcome');
      }

     public function guardSearch(Request $request)
     {
     	$loc=$request->loc;  	
     	$jobType=$request->job;  	

     	 $data = $this->user
     	 	->where('id',$loc)
     	 	->orwhere('id',$jobType)
     	 	->with('GuardProfile')
     	 	->with('PreferedLocation')->get();
            // dd($data);

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
               return redirect(route('home'));
            }
     }

}
