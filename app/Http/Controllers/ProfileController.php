<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use DB;
use App\User;

class ProfileController extends Controller
{

    public function __construct()

            {

      $this->middleware('auth');

            }

    public function Profile()
   
            {

        $profiles = Profile::find($profile); 
        $Profiles = DB::table("profiles")->get();
        
    return view('UserHome', compact('profiles'))->
     with('response', 'Profile Added Successfully.');
            }
    

    public function addProfile(request $request)
    
          {

        $this ->validate($request, [

              'firstName'=> 'required',
              'lastName'=> 'required',
              'address'=> 'required',
              'jobTitle'=> 'required',
          ]);

        $profiles = new Profile;

        $profiles->users_id = Auth::user()->id;
        $profiles->firstName = $request->firstName;
        $profiles->lastName = $request->lastName;
        $profiles->address = $request->address; 
        $profiles->jobTitle = $request->jobTitle;
    
        $profiles->save();
      $Profiles = DB::table("profiles")->get();

    return view('UserHome', compact('profiles'))->
     with('response', 'Profile Added Successfully.');

          }
          
    
    public function updateProfile()
          {

         return view('AddProfile'); 
          }


    public function showProfile(Profile $profile)
            {

      $profiles = Profile::find($profile); 
      $profiles=Profile::first();
    
    return view('UserHome', compact('profiles'));
   
            }
    
}