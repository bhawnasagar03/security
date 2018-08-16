<?php

namespace App\Http\Controllers\User;

use Mail;
use App\User;
use App\GuardCancel;
use App\GuardProfile;
use App\AddToWishlist;
use App\Mail\verifyEmail;
use App\PreferedLocation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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

         $this->middleware('guest:User');
    }

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function registerUser(Request $request)
    {

                $password       =$request->input('password');
                $jobType        =$request->input('jobType');
                $exProfession   =$request->input('exProfession');
                $qualification  =$request->input('qualification');
                $language       =$request->input('language');
                $verifyToken    =str::random(40);
                $loc1           =$request->input('loc1');
                $loc2           =$request->input('loc2');
                $loc3           =$request->input('loc3');
                $loc4           =$request->input('loc4');
            

                $user=$this->user
                ->create([
                    'fname'         =>   $request->has('fname')     ? $request->fname :     '',
                    'lname'         =>   $request->has('lname')     ? $request->lname :     '',
                    'email'         =>   $request->has('email')     ? $request->email :     '',
                    'password'      =>   bcrypt($password),
                    'date'          =>   $request->has('date')      ? $request->date :      '',
                    'phone'         =>   $request->has('phone')     ? $request->phone :     '',
                    'gender'        =>   $request->has('gender')    ? $request->gender :    '',
                    'location'      =>   $request->has('location')  ? $request->location :  '',
                    'verifyToken'   =>   $verifyToken,
                ]);

                 if ($request->file('licence')!== null) 
                {
                        $doc = $request->licence;//User::Input('file');

                        $docName  = $doc->getClientOriginalName();

                        $docPath  = url('uploads/document/'.$docName);

                        $destinationPath='uploads/document/';

                        if ($doc->move($destinationPath,$docName)); {
                                
                                $request['image_path']=$docPath;
                            }

             
                if ($request->file('image')!== null) 
                 {
                         $file = $request->image;

                         $imageName  = $file->getClientOriginalName();

                         $imagePath  = url('uploads/user/'.$imageName);

                         $destinationPath='uploads/user/';

                         if ($file->move($destinationPath,$imageName)); {
                                 
                                 $request['image_path']=$imagePath;
                             }

                 
                $guard=$this->guardProfile
                ->create([
                    'user_id'        =>   $user->id,
                    'jobType'        =>   $jobType,
                    'exProfession'   =>   $exProfession,
                    'qualification'  =>   $qualification,
                    'language'       =>   $language,
                    'image'          =>   $imagePath,
                    'licence'        =>   $docPath,
                ]);
            

                $loc=$this->preferedLocation
                ->create([
                    'user_id'   =>   $user->id,
                    'guard_id'  =>   $guard->id,
                    'loc1'      =>   $loc1,
                    'loc2'      =>   $loc2,
                    'loc3'      =>   $loc3,
                    'loc4'      =>   $loc4,  
                ]);

                $thisUser=User::findOrFail($user->id);
                $this->sendEmail($thisUser);
                $this->validation($request);
                if($user)
                {
                  User::where(['id'=>$guard->user_id])->update(['userType'=>1]);
                  return redirect(route('customerLogin'))->with('status', 'Dear Customer You successfully Registered, please login');  
                }

                
            }
            }
                          
                $thisUser=User::findOrFail($user->id);
                $this->sendEmail($thisUser);

                $this->validation($request);
                return redirect(route('customerLogin'))->with('message', 'Dear Customer You successfully Registered, please login');;         
                      
    
} 

        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validation($request)
    {
        try {

            return $this->validate($request,[
                        'fname'         => 'required|max:225',
                        'lname'         => 'required|max:225',
                        //'email'         => 'required|string|email|max:255',
                        'password'      => 'required|confirmed|min:6',
                        'date'          => 'required|date|date|before:today',
                        'phone'         => 'required|numeric|min:10',
                        'gender'        => 'required|max:225',
                        'location'      => 'required|max:225',
                        // 'jobType'       => 'required|max:225',
                        // 'exProfession'  => 'required|max:225',
                        // 'qualification' => 'required|max:225',
                        // 'language'      => 'required|max:225',
                        // 'licence'       => 'required|max:225',
                        // 'image'         => 'required|max:225',
                        // 'loc1'          => 'required|max:225',
                        // 'loc2'          => 'required|max:225',
                        // 'loc3'          => 'required|max:225',
                        // 'loc4'          => 'required|max:225',
                    ]);
            
        } 
        catch(Exception $ex) {
            return response($ex->getMessage(), 400);
          }
        
    }



        public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    public function sendEmailDone($email,$verifyToken )
    {

        $emailValid=User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if ($emailValid)
        {
            User::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>1,'verifyToken'=>NUll]);

            return redirect(route('customerLogin'));
        }
        else
        {

         return 'user not found';
        }
    }



 public function selectSignup()
    {
        return view('signupSelection');
    }

     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
     public function showSignupForm()
    {
        return view('signup');
    }

     public function guardSignup()
    {
        return view('guardSignup');
    }
   
}
