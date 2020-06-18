@extends('backends.master')

@section('pdf_menu_class','open active')
@section('pdf_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Dashboard</a>
        </li>
        <li>
            PDF
        </li>
        <li>
            <small>Upload</small>
        </li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-container">
            <div class="widget-box">
                <div class="widget-header">
                    <h5 class="widget-title">Add New PDF</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                    	@if(session()->has('del'))
                    	<div class="alert alert-success alert-dismissible" role="alert">
                    		{{ session()->get('del') }}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
						@endif

                        @include('backends.partials.session_messages')

                        <form class="form-horizontal" action="{{ route('backend.pdf.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label for="title"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    Title<span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" id="title" name="title"
                                               placeholder="Enter PDF Title" class="col-xs-12 col-sm-8"
                                               value="{{ old('title') }}" required/>
                                    </span>
                                </div>

                                @if($errors->has('title'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('title') }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('content')) has-error @endif">
                                <label for="content"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    PDF :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="file" accept="pdf/*" name="content" id="content" class="col-xs-12 col-sm-8" required />
                                    </span>
                                </div>

                                @if($errors->has('content'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('content') }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="clearfix form-actions">
                                <div class="col-md-offset-4 col-md-8">
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>

                                    &nbsp; &nbsp; &nbsp;

                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="widget-box">
                <div class="widget-header">
                    <h5 class="widget-title">PDF</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div id="">
                                @if(!empty($pdfs))
                                    @foreach($pdfs as $pdf)
                                        <div class="col-xs-6 col-sm-3 col-md-2 text-center">
                                            <a href="{{ asset($pdf->pdf) }}" target="_blank">
                                            	<div style="font-size: 30px;">
                                                <i class="fa fa-file-pdf-o"></i>
                                            	</div>
                                                <span>{{ $pdf->title }}</span>
                                            </a>|
                                            <a href="{{ route('backend.pdf.delete', $pdf->id) }}"><i class="fa fa-trash" style="color: red;"></i></a>
                                        </div>
                                    @endforeach  
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker3.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/image_gallery/css/lightgallery.css">
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assets') }}/image_gallery/js/lightgallery.js"></script>
    <script>

navigator.permissions.query({
  name: 'clipboard-write'
}).then(permissionStatus => {
  // Will be 'granted', 'denied' or 'prompt':
  console.log(permissionStatus.state);

  // Listen for changes to the permission state
  permissionStatus.onchange = () => {
    console.log(permissionStatus.state);
  };
});
        $('#expire_date').datepicker({
            autoclose: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        lightGallery(document.getElementById('lightgallery'));

        function copyUrl(img_url) {
            navigator.clipboard.writeText(img_url).then(function() {
                console.log('Async: Copying to clipboard was successful!');
                alert("Copied");
            }, function(err) {
                console.error('Async: Could not copy text: ', err);
            });
        }
    </script>
@endsection

