<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $table 		= "profile";
	protected $primaryKey 	= "idprofile";
	function get_id($id){
		return profile::find($id);
	}
    //
}
