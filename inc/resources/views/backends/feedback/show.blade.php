@extends('backends.master')

@section('feedback_menu_class','open active')
@section('feedback_list_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li>
            Menu
        </li>
        <li>
            <small>View</small>
        </li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
    <div class="row">
        <div class="space-6"></div>

        @include('backends.partials.session_messages')

        <div class="vspace-12-sm"></div>

        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="widget-box" style="padding-top: 4px;">
                <div class="widget-header">
                    <a href="{{ route('backend.feedback.index') }}" class="btn btn-default btn-sm">List</a>
                    
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <td> : </td>
                                        <td>{{ $message->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td> : </td>
                                        <td>{{ $message->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td> : </td>
                                        <td>{{ $message->subject }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td> : </td>
                                        <td>{{ $message->message }}</td>
                                    </tr>
                                </table>
                            </div>

                            {{-- <div class="col-md-3 offset-2">
                                <img src="{{ asset('assets') }}/cm.jpg" class="img img-circle img-responsive">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
@endsection


@section('custom_script')
    <script type="text/javascript">
        function submit_license_key_update_form() {
            if(confirm("Are You Sure?") == true) {
                $("#license-key-update-form").submit();
            }
        }
    </script>
@endsection