@extends('backends.master')


@section('student_menu_class','open active')
@section('student_list_menu_class','active')

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
                    <a href="{{ route('backend.student.index') }}" class="btn btn-default btn-sm">List</a>
                    
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table">
                                    <tr>
                                        <th>Full Name</th>
                                        <td> : </td>
                                        <td>{{ $student->full_name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td> : </td>
                                        <td>{{ $student->date_of_birth }}</td>
                                    </tr>

                                    <tr>
                                        <th>City Of Residence</th>
                                        <td> : </td>
                                        <td>{{ $student->city_of_residence }}</td>
                                    </tr>

                                    <tr>
                                        <th>Full Name</th>
                                        <td> : </td>
                                        <td>{{ $student->full_name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Institute</th>
                                        <td> : </td>
                                        <td>{{ $student->institute }}</td>
                                    </tr>

                                    <tr>
                                        <th>Phone Number</th>
                                        <td> : </td>
                                        <td>{{ $student->phone_number }}</td>
                                    </tr>

                                    <tr>
                                        <th>Whatsapp Number</th>
                                        <td> : </td>
                                        <td>{{ $student->whatsapp_number }}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th>
                                        <td> : </td>
                                        <td>{{ $student->email_address }}</td>
                                    </tr>

                                    <tr>
                                        <th>Academic Interest</th>
                                        <td> : </td>
                                        <td>{{ $student->academic_interest }}</td>
                                    </tr>

                                    <tr>
                                        <th>Preferred Course</th>
                                        <td> : </td>
                                        <td>{{ $student->preferred_course }}</td>
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