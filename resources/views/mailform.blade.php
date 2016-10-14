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
                                    <textarea class="form-control" name='input_msg' id='input_msg'></textarea>
                                </div>
                                <div class="row">
                                	<div class="col-md-6">
                                		<a  href="{!!config('app.url')!!}public" class="btn btn-danger" name='btn-cancel' id='btn-cancel'>Cancel</a>
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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({selector:"#input_msg",
                 plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
                  ],
                toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
                toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak ",

                menubar:false});
</script>

@endsection
