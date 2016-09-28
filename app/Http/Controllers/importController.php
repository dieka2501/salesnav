<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;
use DB;

class importController extends Controller
{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
	}

    public function importCSV(Request $request)
	{
		if($request->hasFile('files_import'))
		{
			$path = $request->file('files_import')->getRealPath();
			$data = Excel::load($path, function($reader){
						$reader->setDelimiter(',');
						$reader->get();
					});
			if(!empty($data))
			{
				foreach ($data->toArray() as $key => $v) 
				{
					$dt[] = [   
								'profile_name' => $v['profile_name'], 
								'profile_email' => $v['profile_email'],
								'profile_phone' => $v['profile_phone'],
								'profile_handphone' => $v['profile_handphone'],
								'profile_job_position' => $v['profile_job_position'],
								'profile_company' => $v['profile_company'],
								'profile_business_line' => $v['profile_business_line'],
								'profile_gender' => $v['profile_gender'],
								'profile_experiece' => $v['profile_experiece'],
								'profile_interest' => $v['profile_interest'],
								'profile_note' => $v['profile_note'],
								'created_at' => new \DateTime(),
								'update_at' => new \DateTime(),
								'deleted_at' => new \DateTime()
							];
				}				

				if(!empty($dt))
				{
					$i = DB::table('profile')->insert($dt);
					$result = DB::table('profile')                     
							 ->select('profile_name','profile_email','profile_phone','profile_job_position','profile_company')
							 ->orderBy('profile_name','ASC')
							 ->get();
					return back()->with('dataprofile',$result);
				}
			}
		}
		return back();
	}
	
	public function profileList(){

            return Datatables::of($result)
            ->make(true);
        }
}
