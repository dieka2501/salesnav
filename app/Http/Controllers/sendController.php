<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Weblee\Mandrill\Mail;

class sendController extends Controller
{
    //
    function __construct(){
    	date_default_timezone_set('Asia/Jakarta');
    }

    function send_admin(Mail $mandrill,Request $request){
    	$this->mandrill = $mandrill;

    	$input_to 			= $request->input('input_to');
    	$input_subject 		= $request->input('input_subject');
    	$input_msg 	 		= $request->input('input_msg');
    	$message 			= ['text'=>$input_msg,
    							'subject'=>$input_subject,
    							'from_email'=>'insight@data-driven.asia',
    							'from_name'=>'Data Driven Asia',
    							'to'=>[
    									['email'=>$input_to,
    									 'name'=>"",
    									 'type'=>'to']
    									],
    							'track_clicks'=>true
    						  ];
    	$result 			= $this->mandrill->messages()->send($message);
    	$request->session()->flash('notip','<div class="alert alert-success">Email sent</div>');
    	return redirect('/');
    }
}
