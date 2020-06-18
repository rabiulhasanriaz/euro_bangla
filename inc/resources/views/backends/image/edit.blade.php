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
            <small>Edit</small>
        </li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
    <div class="row">
        <div class="space-6"></div>


        <div class="vspace-12-sm"></div>

        <div class="">
            <div class="widget-box">
                <div class="widget-header">
                    <h5 class="widget-title">Edit Menu</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main">

                        @include('backends.partials.session_messages')

                        <form class="form-horizontal" action="{{ route('backend.menu.update', $menu->id) }}" method="post">
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
                                               value="{{ $menu->title }}" required/>
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
                                        <textarea name="content" id="content" class="col-xs-12 col-sm-8" placeholder="Enter Menu Content">{{ $menu->content }}</textarea>
                                    </span>
                                </div>

                                @if($errors->has('content'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('content') }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('status')) has-error @endif">
                                <label for="status"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    <label class="control-label bolder blue">Status</label>
                                    <span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <div class="radio">
                                            <label>
                                                <input name="status" value="1" type="radio" class="ace input-sm"
                                                    {{ ($menu->status=='1')?'checked':'' }}>
                                                <span class="lbl"> Active</span>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input name="status" value="0" type="radio" class="ace input-sm"
                                                    {{ ($menu->status=='0')?'checked':'' }}>
                                                <span class="lbl bigger-120 text-danger"> InActive</span>
                                            </label>
                                        </div>
                                    </span>
                                </div>

                                @if($errors->has('status'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('status') }}</span>
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
                                        Update
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col -->
@endsection

@section('custom_style')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker3.min.css"/>
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assets') }}/ckeditor/ckeditor.js"></script>
    <script>
        $('#expire_date').datepicker({
            autoclose: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        CKEDITOR.replace('content');
    </script>
@endsection
