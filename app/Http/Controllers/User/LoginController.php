<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:User', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login');
    }

     /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('User');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
                    'email'     => 'required|email|max:225',
                    'password'  => 'required|max:225',
                ]);

         if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) 
                {

                    $user= User::where(['email'=>$request->email])->first();
                    if($user->is_admin())
                        {
                            return redirect(route('guardHome'));
                        }
                        return redirect(route('home'));                   
                }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

}
