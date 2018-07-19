<?php

namespace App\Http\Controllers;

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

class HomeController extends Controller
{


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

         $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function guardHome()
     {

        $data = $this->user
        ->where('id',Auth::user()->id)
        ->with('GuardProfile')->first();
        return view('guardDashboard', [
                'data'  =>$data

            ]);
        
     }

     public function adminHome()
     {
        return view('adminDashboard');
     }
     
     public function guardWishlist(Request $request, $id)
     {
        $user = User::find($id);
        $oldWishlist =Session::has('wishlist') ? Session::get('wishlist') : null;
        $wishlist = new wishlist($oldWishlist);
        $wishlist->add($user, $user->id);
        $request->session()->put('wishlist', $wishlist);
        //dd($request->session()->get('wishlist'));
        return redirect(route('home'));
     }

     public function getWishlist()
     {
        if (!Session::has('wishlist')) {
            return view('wish.wishlist');
        }
        $oldWishlist = Session::get('wishlist');
        $wishlist= new Wishlist($oldWishlist);
        return view('wish.wishlist', [
            'data' => $wishlist->guards

            ]);
     }

     // public function bookGuard()
     // {
       
     //    Mail::to(Auth::user()->email)->send(new GuardBook());
     //    return redirect('/home');
     // }

     public function wishlist(Request $request,User $user)
     {
       

        $addToWishlist = new AddToWishlist;

        $addToWishlist->user_id  = Auth::user()->id;
        $addToWishlist->guard_id = $request->guard_id;
        $addToWishlist ->save();

          // $follower = auth()->user();

        Mail::to($request->guard_email)->send(new JobDetails());
        Mail::to(Auth::user()->email)->send(new GuardBook());
        auth()->user()->notify(new Notifications());
       // $request->guard_id->notify(new Notifications());
        //Notification::send($request->guard_id, new Notifications());
         $data = $this->guardProfile
        ->where('user_id',$request->guard_id)
        ->update(['vailable'=>1]); 

        $bookId = $this->addToWishlist
        ->where('book_id',null)
        ->update(['book_id'=>Auth::user()->id]);

         $cancelId = $this->guardCancel
        ->where('guard_id',$request->guard_id)
        ->update(['cancel_id'=>null]);
        
         return back()->with('message', 'Dear   '.Auth::user()->fname.' You successfully book this guard');
     } 

     public function cancelGuard(Request $request)
     {
       
        $cancelGuard = new GuardCancel;

        $cancelGuard->user_id  = Auth::user()->id;
        $cancelGuard->guard_id = $request->guard_id;
        $cancelGuard->save();

        //dd(Auth::user()->email);
         Mail::to($request->guard_email)->send(new cancelJob());
         Mail::to(Auth::user()->email)->send(new cancelGuard());
         auth()->user()->notify(new Notifications());

       // $request->guard_id->notify(new Notifications());
        //Notification::send($request->guard_id, new Notifications());
          $data = $this->guardProfile
        ->where('user_id',$request->guard_id)
        ->update(['vailable'=>0]);

        $cancelId = $this->guardCancel
        ->where('cancel_id',null)
        ->update(['cancel_id'=>Auth::user()->id]);

        $bookId = $this->addToWishlist
        ->where('guard_id',$request->guard_id)
        ->update(['book_id'=>null]);

        return redirect(route('home'))->with('message', 'Dear   '.Auth::user()->fname.' You successfully cancel this guard');
     }
     
     public function markAsRead()
     {

       auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
     }

       
}
