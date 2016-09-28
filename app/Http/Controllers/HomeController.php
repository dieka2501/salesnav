<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $view['url']    = config('app.url').'public/files/import/';
		$result = DB::table('profile')                     
					 ->select('profile_name','profile_email','profile_phone','profile_job_position','profile_company')
					 ->orderBy('profile_name','ASC')
					 ->get();
        return view('home',$view)->with('dataprofile',$result);
    }
	
}
