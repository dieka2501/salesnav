<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\profile;
class navController extends Controller
{
	function __construct(){
		date_default_timezone_set("Asia/Jakarta");
		$this->profile = new profile;
	}

	function index(Request $req){
		$name 		= ($req->has('profile_name'))?$req->input('profile_name'):"";
		$email 		= ($req->has('profile_email'))?$req->input('profile_email'):"";
		$job_pos 	= ($req->has('profile_job_position'))?$req->input('profile_job_position'):"";
		$company 	= ($req->has('profile_company'))?$req->input('profile_company'):"";
		$view['data'] 						= $this->profile->get_pages($name,$email,$job_pos,$company);
		$view['profile_name'] 				= $name;
		$view['profile_email'] 				= $email;
		$view['profile_job_position'] 		= $job_pos;
		$view['profile_company'] 			= $company;
		return view('search',$view);
	}
    //
}
