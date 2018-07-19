<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardDisableEnableController extends Controller
{
    public function __construct(User $user, GuardProfile $guardProfile, PreferedLocation $preferedLocation)
     {
        $this->user             = $user;
        $this->guardProfile     = $guardProfile;
        $this->preferedLocation = $preferedLocation;
     }

     public function index(Request $request, $id)
     {
     	$user = User::find($id);
     	$gurdId=$request->gurdId;
        dd($gurdId);

        return $gurdId;
     }
}
