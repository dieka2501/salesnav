@extends('layouts.app')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
							</tr>
							<?php
								}
							?>
						  </tbody>
						</table>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
