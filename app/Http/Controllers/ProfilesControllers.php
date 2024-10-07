<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfilesControllers extends Controller
{
    //
    public function getProfiles(){

        $profiles = Profiles::all();
        return view('profiles',["profiles"=> $profiles]);
    }

    public function getProfile(Request $request){
        $profile = Profiles::find($request->id);

        return view('profile',["profile"=> $profile]);

    }
}
