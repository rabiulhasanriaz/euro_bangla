@extends('backends.master')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Dashboard</a>
        </li>
        <li>
            Profile
        </li>
        <li>
            <small>Update</small>
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
                    <h5 class="widget-title">Update Profile</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main">

                        @include('backends.partials.session_messages')

                        <form class="form-horizontal" action="{{ route('backend.profile.update') }}"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                <label for="name"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    Name<span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" id="name" name="name"
                                               placeholder="Enter Name" class="col-xs-12 col-sm-8"
                                               value="{{ Auth::user()->name }}" required/>
                                    </span>
                                </div>

                                @if($errors->has('name'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('name') }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('email')) has-error @endif">
                                <label for="email"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    Email<span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="email" id="email" name="email" placeholder="Enter Company Email"
                                               class="col-xs-12 col-sm-8"
                                               value="{{ Auth::user()->email }}" required/>
                                    </span>
                                </div>

                                @if($errors->has('email'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('email') }}</span>
                                    </div>
                                @endif
                            </div>

                            {{-- <div class="form-group @if($errors->has('mobile_number')) has-error @endif">
                                <label for="mobile_number"
                                       class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right">
                                    Mobile Number<span class="text-danger">*</span> :
                                </label>
                                <div class="col-xs-12 col-sm-7">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" id="mobile_number" name="mobile_number"
                                               placeholder="Enter Your Mobile Number" class="col-xs-12 col-sm-8"
                                               value="{{ Auth::user()->mobile_number }}" required/>
                                    </span>
                                </div>

                                @if($errors->has('mobile_number'))
                                    <div class="col-xs-offset-2 col-xs-9 text-danger">
                                        <span>{{ $errors->first('mobile_number') }}</span>
                                    </div>
                                @endif
                            </div> --}}

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
    </div><!-- /.row -->
@endsection



@section('custom_style')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker3.min.css"/>
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
    </script>
@endsection
