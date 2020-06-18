@extends('backends.master')

@section('menu_menu_class','open active')
@section('create_menu_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Dashboard</a>
        </li>
        <li>
            Menu
        </li>
        <li>
            <small>Create</small>
        </li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-container">
            <div class="widget-box">
                <div class="widget-header">
                    <h5 class="widget-title">Create new Menu</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main">

                        @include('backends.partials.session_messages')

                        <form class="form-horizontal" action="{{ route('backend.menu.store') }}" method="post">
                            @csrf

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label for="title"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    Title<span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" id="title" name="title"
                                               placeholder="Enter Menu Title" class="col-xs-12 col-sm-8"
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
                                    Content :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <textarea name="content" id="content" class="col-xs-12 col-sm-8" placeholder="Enter Menu Content"></textarea>
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



                        <div class="row">
                            @if(!empty($images))
                                @foreach($images as $img)
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center">
                                        <a href="javascript:void(0);" onclick="show_url({{ $loop->iteration }})">
                                            <img src="{{ asset($img->image) }}" class="img-responsive">
                                            <span>{{ $img->title }}</span>
                                        </a>
                                        <div class="show-url sl_no_{{ $loop->iteration }}">
                                            <input type="text" value="{{ asset($img->image) }}">
                                            <br>
                                            <button onclick="hide_url({{ $loop->iteration }})">X</button>
                                        </div>
                                    </div>
                                @endforeach  
                            @endif
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
    <style>
        .show-url {
            position: absolute;
            margin-top: -76%;
            height: 100%;
            padding-top: 25%;
            background-color: #dddddd9e;
            display: none;
        }
    </style>
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets') }}/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#expire_date').datepicker({
            autoclose: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        CKEDITOR.replace('content');

        function show_url(slno) {
            $(".show-url.sl_no_"+slno).show();
        }
        function hide_url(slno) {
            $(".show-url.sl_no_"+slno).hide();
        }
    </script>
@endsection

