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
                return view('layouts/homeLayout',[ 
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
        $job=$request->job;
    
        $data2=$this->addToWishlist->get();
        $data3=$this->guardCancel->get();

           $data=User::whereHas('GuardProfile', function ($q) use ($job) {
               $q->where('jobType', $job);
           })->orwhereHas('PreferedLocation', function ($q) use ($loc) {
               $q->where('loc1', $loc);
           })->orwhereHas('PreferedLocation', function ($q) use ($loc) {
               $q->where('loc2', $loc);
           })->orwhereHas('PreferedLocation', function ($q) use ($loc) {
               $q->where('loc3', $loc);
           })->orwhereHas('PreferedLocation', function ($q) use ($loc) {
               $q->where('loc4', $loc);
           })->get();


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
