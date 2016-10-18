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

	function get_pages($name,$email,$job_pos,$company){

		if($name != ""){
			if(strpos($name,",") !== FALSE){
				$expname = explode(',',$name);
				$cname   = count($expname);
				$sqlname = "(";
				for($iname = 0 ; $iname < $cname; $iname++){
					if(isset($expname[$iname+1])){
						$sqlname 	.= "`profile_name` like '%".$expname[$iname]."%' OR ";		
					}else{
						$sqlname 	.= "`profile_name` like '%".$expname[$iname]."%' ";
					}
				}
				$sqlname .=") AND";
			}else{
				$sqlname = '(profile_name like "%'.$name.'%") AND '	;
			}
			
		}else{
			$sqlname = '(profile_name like "%" ) AND ';
		}

		if($email != ""){
			if(strpos($email,",") !== FALSE){
				$expemail = explode(',',$email);
				$cemail   = count($expemail);
				$sqlemail = "(";
				for($iemail = 0 ; $iemail < $cemail; $iemail++){
					if(isset($expemail[$iemail+1])){
						$sqlemail 	.= "`profile_email` like '%".$expemail[$iemail]."%' OR ";		
					}else{
						$sqlemail 	.= "`profile_email` like '%".$expemail[$iemail]."%' ";
					}
				}
				$sqlemail .=") AND ";
			}else{
				$sqlemail = '(profile_email like "%'.$email.'%") AND ';
			}
			
		}else{
			$sqlemail = '(profile_email like "%" ) AND ';
		}

		if($job_pos != ""){
			if(strpos($job_pos,",") !== FALSE){
				$expjob_pos = explode(',',$job_pos);
				$cjob_pos   = count($expjob_pos);
				$sqljob_pos = "(";
				for($ijob_pos = 0 ; $ijob_pos < $cjob_pos; $ijob_pos++){
					if(isset($expjob_pos[$ijob_pos+1])){
						$sqljob_pos 	.= "`profile_job_position` like '%".$expjob_pos[$ijob_pos]."%' OR ";		
					}else{
						$sqljob_pos 	.= "`profile_job_position` like '%".$expjob_pos[$ijob_pos]."%' ";
					}
				}
				$sqljob_pos .=") AND";
			}else{
				$sqljob_pos = '(profile_job_position like "%'.$job_pos.'%") AND '	;
			}
			
		}else{
			$sqljob_pos = '(profile_job_position like "%" ) AND ';
		}

		if($company != ""){
			if(strpos($company,",") !== FALSE){
				$expcompany = explode(',',$company);
				$ccompany   = count($expcompany);
				$sqlcompany = "(";
				for($icompany = 0 ; $icompany < $ccompany; $icompany++){
					if(isset($expcompany[$icompany+1])){
						$sqlcompany 	.= "`profile_company` like '%".$expcompany[$icompany]."%' OR ";		
					}else{
						$sqlcompany 	.= "`profile_company` like '%".$expcompany[$icompany]."%' ";
					}
				}
				$sqlcompany .=") ";
			}else{
				$sqlcompany = '(profie_company like "%'.$company.'%")  ';
			}
			 
		}else{
			$sqlcompany = '(profile_company like "%" )  ';
		}

		return profile::whereRaw($sqlname.$sqlemail.$sqljob_pos.$sqlcompany)->paginate(20);
	}
    //
}
