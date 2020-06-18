@extends('backends.master')


@section('institute_menu_class','open active')
@section('institute_list_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li>
            Institute
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
                    <a href="{{ route('backend.institute.index') }}" class="btn btn-default btn-sm">List</a>
                    
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table">
                                    <tr>
                                        <th>Institute Name</th>
                                        <td> : </td>
                                        <td>{{ $institute->institute_name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Institute Country</th>
                                        <td> : </td>
                                        <td>{{ $institute->institute_country }}</td>
                                    </tr>

                                    <tr>
                                        <th>Institute Address</th>
                                        <td> : </td>
                                        <td>{{ $institute->city_of_residence }}</td>
                                    </tr>

                                    <tr>
                                        <th>Institute Website</th>
                                        <td> : </td>
                                        <td>{{ $institute->institute_website }}</td>
                                    </tr>

                                    <tr>
                                        <th>Contact Person Name</th>
                                        <td> : </td>
                                        <td>{{ $institute->contact_person_name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Phone Number</th>
                                        <td> : </td>
                                        <td>{{ $institute->phone_number }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Email</th>
                                        <td> : </td>
                                        <td>{{ $institute->email_address }}</td>
                                    </tr>

                                    <tr>
                                        <th>Alternative Email</th>
                                        <td> : </td>
                                        <td>{{ $institute->alternative_email }}</td>
                                    </tr>

                                    <tr>
                                        <th>Sponsorship</th>
                                        <td> : </td>
                                        <td>{{ ($institute->sponsorship == 1)? 'Yes':'No' }}</td>
                                    </tr>

                                    <tr>
                                        <th>Sponsorship Package</th>
                                        <td> : </td>
                                        <td>{{ $institute->sponsorship_package }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Meeting</th>
                                        <td> : </td>
                                        <td>{{ ($institute->meeting == 1)?'Yes':'No' }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Meeting Time</th>
                                        <td> : </td>
                                        <td>{{ $institute->meeting_time }}</td>
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