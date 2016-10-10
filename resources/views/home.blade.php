@extends('layouts.app')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <p>{!!session("notip")!!}</p>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">

                            {!!Form::open(['url'=>'/importCSV','method'=>"POST",'files'=>true,'class'=>'form-inline'])!!}
                                <div class="form-group">
                                    <input type="file" name="files_import" class="form-group" accept=".csv">
                                </div>
                                <button class="btn btn-primary" name='btn-import' id='btn-import'>Import</button>
                            {!!Form::close()!!}
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		{!!Form::open(['url'=>'/','method'=>"GET"])!!}
                                <div class="form-group">
                                    <input type="text" name="cari" class="form-control" placeholder="Search Name, Email, Job Position, or Company" value="{!!$cari!!}">
                                </div>
                                <button class="btn btn-warning" id='btn-cari'>Cari</button>
                            {!!Form::close()!!}
                    	</div>
                    </div>
					<div class="row">
						<br/>
						<br/>
						<table class="table table-bordered table-hover">
						  <thead>
							<tr>
								<th style="text-align:center;">Name</th>
								<th style="text-align:center;">Email</th>
								<th style="text-align:center;">Phone</th>
								<th style="text-align:center;">Position</th>
								<th style="text-align:center;">Company</th>
								<th style="text-align:center;">Send Mail</th>
							</tr>
						  </thead>
						  <tbody>
							<?php
								foreach ($dataprofile as $row) {
							?>
							<tr>
								<td><?php echo $row->profile_name ?></td>
								<td><?php echo $row->profile_email ?></td>
								<td><?php echo $row->profile_phone ?></td>
								<td><?php echo $row->profile_job_position ?></td>
								<td><?php echo $row->profile_company ?></td>
								<td><a href="mail/{!!$row->idprofile!!}" class='btn btn-xs btn-danger'>Send Email</a></td>
							</tr>
							<?php
								}
							?>
						  </tbody>
						</table>
						{!!$dataprofile->appends(['cari'=>$cari])->render()!!}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
