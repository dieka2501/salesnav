<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\profile;
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
        $this->profile = new profile;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $cari   = $request->input('cari');
        }else{
            $cari   = "";
        }
        $view['cari'] = $cari;
        $view['url']    = config('app.url').'public/files/import/';
		$result = DB::table('profile')                     
					 ->select('idprofile','profile_name','profile_email','profile_phone','profile_job_position','profile_company')
					 ->orderBy('profile_name','ASC')
                     ->where('profile_name','like','%'.$cari.'%')
                     ->orWhere('profile_email','like','%'.$cari.'%')
                     ->orWhere('profile_job_position','like','%'.$cari.'%')
                     ->orWhere('profile_company','like','%'.$cari.'%')
					 ->paginate(20);
        return view('home',$view)->with('dataprofile',$result);
    }

    function mail_admin($id){
        $getdata        = $this->profile->get_id($id);
        $view['data']   = $getdata;
        $view['url']    = config('app.url').'public/mail';
        return view('mailform',$view);
    }
	
}
