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
use Illuminate\Pagination\Paginator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Pagination\LengthAwarePaginator;
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
            ->with('PreferedLocation')->Paginate(4);
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
            ->where('userType', 0)->Paginate(4);
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


  public function editGuard($id)
  {
     $guard= $this->user
            ->where('userType', 1)
            ->with('GuardProfile')
            ->with('PreferedLocation')->find($id);
        if($guard)
            {
                return view('Curd.editGuard', [
                    'guard'  =>$guard

                ]);
            }
            else
            {
                return view('admin.dashboard.userNotFound');
            }

  }

  public function updateGuard(Request $req)
  {
    $user= $this->user
                ->where('userType', 1)
                ->with('GuardProfile')
                ->with('PreferedLocation')->find($req->input('updateId'));

    $guard=$this->guardProfile->find($req->input('updateId'));

    $loc=$this->preferedLocation->find($req->input('updateId'));

    $currentPass=$user['password'];
    $password =$req->input('password');

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
    return redirect(route('admin.showGuard'));
  }


  public function editUser($id)
  {
     $guard= $this->user
            ->where('userType', 0)->find($id);
        if($guard)
            {
                return view('Curd.editUser', [
                    'guard'  =>$guard

                ]);
            }
            else
            {
                return view('admin.dashboard.userNotFound');
            }

  }



  public function updateUser(Request $req)
  {
    // dd($req->input());

   $user= $this->user
                ->where('userType', 0)
                ->find($req->input('updateId'));

    $currentPass=$user['password'];
    $password =$req->input('password');

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
    return redirect(route('admin.showUser'));
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