<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Auth;
use Session;
use App\User;
use App\Wishlist;
use App\GuardCancel;
use App\UserWishlist;
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

class CurdController extends Controller
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


   public function deleteGuardAccount($id)
     {
        $data = $this->user
        ->where('id',$id)
        ->with('GuardProfile')
        ->with('PreferedLocation')->delete();

        return redirect(route('welcome'))->with('message','Your Account has been deleted');

     }

     public function editGuardProfile($id)
     {
        $guard= $this->user
               ->where('userType', 1)
               ->with('GuardProfile')
               ->with('PreferedLocation')->find($id);

           if($guard)
               {
                   return view('Curd.editGuardProfile', [
                       'guard'  =>$guard

                   ]);
               }
               else
               {
                   return 'user not found';
               }

     }

     public function updateGuardProfile(Request $req)
     {

     $user= $this->user
                 ->where('userType', 1)
                 ->with('GuardProfile')
                 ->with('PreferedLocation')->find($req->input('updateId'));

      // dd($user->PreferedLocation);


     $password =$req->input('password');
     $currentPass=Auth::user()->password;

     $user->fname=$req->input('fname');
     $user->lname=$req->input('lname');
     $user->email=$req->input('email');
     $user->phone=$req->input('phone');
     $user->date=$req->input('date');
     $user->gender=$req->input('gender');
     $user->location=$req->input('location');
     $user->email=$req->input('email');
     $user->GuardProfile->jobType=$req->input('jobType');
     $user->GuardProfile->language=$req->input('language');
     $user->GuardProfile->exProfession=$req->input('exProfession');
     $user->GuardProfile->qualification=$req->input('qualification');
     $user->PreferedLocation->loc1=$req->input('loc1');
     $user->PreferedLocation->loc2=$req->input('loc2');
     $user->PreferedLocation->loc3=$req->input('loc3');
     $user->PreferedLocation->loc4=$req->input('loc4');

      if($password!=$currentPass&&$password!=null)
     {
        
        $user->password=bcrypt($password);
     }

    
        $user->update();
        $user->GuardProfile->update();
        $user->PreferedLocation->update();
        return redirect(route('guardHome'));
    
   }


     public function editUserProfile($id)
     {
        $guard= $this->user
               ->where('userType', 0)->find($id);
           if($guard)
               {
                   return view('Curd.editUserProfile', [
                       'guard'  =>$guard

                   ]);
               }
               else
               {
                   return view('Opps');
               }

     }



     public function updateUserProfile(Request $req)
     {
       // dd($req->input());

      $user= $this->user
                   ->where('userType', 0)
                   ->find($req->input('updateId'));

      $password =$req->input('password');
      $currentPass=Auth::user()->password;

       $user->fname=$req->input('fname');
       $user->lname=$req->input('lname');
       $user->email=$req->input('email');
       $user->phone=$req->input('phone');
       $user->date=$req->input('date');
       $user->gender=$req->input('gender');
       $user->location=$req->input('location');
       $user->email=$req->input('email');

        if($password!=$currentPass&&$password!=null)
       {
          
          $user->password=bcrypt($password);
       }

       $user->update();
       return redirect(route('home'));
     }


     public function deleteWishlist($id)
     {
       $data=UserWIshlist::where('guard_id',$id)->delete();

        return redirect(route('home'))->with('message','You remove this from your wishlist');

     }

     public function viewGuardProfile($id)
     {
        $data = $this->user
            ->where('userType', 1)
            ->with('guardProfile')
            ->with('preferedLocation')->find($id);

            // $data2=$this->addToWishlist->get();
            // $data3=$this->guardCancel->get();
             if($data)
            {
                return view('service.viewGuardProfile', [
                    'data'  =>$data

                ]);
            }
            else
            {
                return 'no data found';
            }

     }

     
}
