<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
        {
        $user_id = Auth::user()->id; //below is joining two tables
        
        $profile =DB::table('users')
                ->join('profiles', 'users.id', '=', 'profiles.users_id') 
                ->select('users.*', 'profiles.*')
                ->where(['profiles.users_id'=> $user_id])
                ->first();

                return view('UserHome', ['profile' => $profile]);
                        
        }


}
