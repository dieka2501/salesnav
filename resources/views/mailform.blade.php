@extends('layouts.app')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Send Email</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {!!Form::open(['url'=>$url,'method'=>"POST",'files'=>true,'class'=>''])!!}
                                <div class="form-group">
                                	<label>Kepada</label>
                                    <input type="text" name="input_to" class="form-control" value='{!!$data->profile_email!!}'>
                                </div>
                                <div class="form-group">
                                	<label>Subject</label>
                                    <input type="text" name="input_subject" class="form-control">
                                </div>
                                <div class="form-group">
                                	<label>Message</label>
                                    <textarea class="form-control" name='input_msg'></textarea>
                                </div>
                                <div class="row">
                                	<div class="col-md-6">
                                		<button class="btn btn-danger" name='btn-cancel' id='btn-cancel'>Cancel</button>
                                	</div>
                                	<div class="col-md-6 text-right">
                                		<button class="btn btn-success" name='btn-send' id='btn-send'>Send</button>
                                	</div>
                                </div>
                                
                                
                            {!!Form::close()!!}
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
