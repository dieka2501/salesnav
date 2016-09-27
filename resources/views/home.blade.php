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
                            {!!Form::open(['url'=>$url,'method'=>"POST",'files'=>true,'class'=>'form-inline'])!!}
                                <div class="form-group">
                                    <input type="file" name="files_import" class="form-group">
                                </div>
                                <button class="btn btn-primary" name='btn-import' id='btn-import'>Import</button>
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
