<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Auth;
use Session;
use App\User;
use App\Admin;
use App\GuardProfile;
use App\PreferedLocation;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\notifications\AdminResetPasswordNotification;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, GuardProfile $guardProfile, PreferedLocation $preferedLocation)
    {
        
        $this->user             = $user;
        $this->guardProfile     = $guardProfile;
        $this->preferedLocation = $preferedLocation;
        
        $this->middleware('auth:admin');
        // $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount = $this->user
        ->where('userType',0)->count();

        $guardCount = $this->user
        ->where('userType',1)->count();

        $totalUsers = $this->user->count();

            return view('admin.home', [
                   
                'userCount'     =>$userCount,
                'guardCount'    =>$guardCount,
                'totalUsers'    =>$totalUsers,

                ]);
    }
    

     public function showGuard()
    
    {
        $data = $this->user
            ->where('userType', 1)
            ->with('GuardProfile')
            ->with('PreferedLocation')->get();
            if (count($data)>0)
            {
                return view('admin.dashboard.guard', [
                    'data'  =>$data

                ]);
            }
            else
            {
               return view('admin.dashboard.guardNotFound');
            }

     }


      public function showUser()
    
    {
        $data = $this->user
            ->where('userType', 0)->get();
            if (count($data)>0)
            {
                return view('admin.dashboard.user', [
                    'data'  =>$data

                ]);
            }
            else
            {
                return view('admin.dashboard.userNotFound');
            }

     }

     public function deleteUser($id)
     {
        $data = $this->user
        ->where('id',$id)->delete();

        return redirect(route('admin.showUser'));
     } 


     public function deleteGuard($id)
     {
        $data = $this->user
        ->where('id',$id)
        ->with('GuardProfile')
        ->with('PreferedLocation')->delete();

        return redirect(route('admin.showGuard'));
     }

      public function searchUser(){
        return view('admin.dashboard.searchUser');
    }

     public function searchU(Request $request){
        if($request->ajax())
        {
             $output   = "";
             $customer = DB::table('users')->where('fname','LIKE','%'.$request->search.'%') ->orWhere('lname','LIKE','%'.$request->search.'%')->get();
             if($customer)
             {
                foreach ($customer as $key => $customers) {
                    $output.='<tr>'.
                             '<td>'.$customers->id.'</td>'.
                             '<td>'.$customers->fname.'</td>'.
                             '<td>'.$customers->lname.'</td>'.
                             '</tr>';
                }

                return Response($output);
             }
        }
  }
   

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    
}