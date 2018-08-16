<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Auth;
use Session;
use App\User;
use App\GuardCancel;
use App\UserWishlist;
use App\GuardProfile;
use App\AddToWishlist;
use App\PreferedLocation;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;


class SignupAuthController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function showData()
    {
        return redirect(route('home')); 
    }
    

    public function index()
    {
            $data = $this->user
            ->where('userType', 1)
            ->with('guardProfile')
            ->with('preferedLocation')->paginate(6);

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


    public function userWishlist(Request $request)
    {


        $wishlist= new UserWishlist;
        $wishlist->user_id=Auth::user()->id;
        $wishlist->guard_id=$request->guard_id;

        $wishlist->save();

        $guard_id=$request->guard_id;
        $this->viewWishlist($guard_id);
        return redirect()->back();
    }

    public function viewWishlist()
    {
        $guard = DB::table('wishlists')->get();
       
      // dd($guard);

        // foreach ($guard as $value) {
        //    dd($value); 
        // }

        $data = $this->user
                   ->where('userType',1)
                   ->with('guardProfile')
                   ->with('preferedLocation')->get();

                   $data2=$this->addToWishlist->get();
                   $data3=$this->guardCancel->get();

                   if (count($data)>0)
                   {
                   return view('wish.viewWishlist', [
                           'data'  =>$data,
                           'data2' =>$data2,
                           'data3' =>$data3,
                           'guard' =>$guard,

                       ]);
                   }
                   else
                   {
                       return view('errorMessages.guardNotAvailable');
                   }

    }


}




