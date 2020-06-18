@extends('backends.master')

@section('institute_menu_class','open active')
@section('institute_list_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li class="active">Institute List</li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')

    <div class="space-6"></div>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            @include('backends.partials.session_messages')

            <table id="employee-list-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Institute Name</th>
                    <th>Institute Country</th>
                    <th>Contact Person Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th class="action_btn">Action</th>
                </tr>
                </thead>

                <tbody>

                <!-- employee lists -->
                @if(!empty($institutes))
                    @foreach($institutes as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->institute_name }}</td>
                            <td>{{ $row->institute_country }}</td>
                            <td>{{ $row->contact_person_name }}</td>
                            <td>{{ $row->phone_number }}</td>
                            <td>{{ $row->email }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('backend.institute.show', $row->id) }}"
                                       class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-eye bigger-120"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif


                </tbody>
            </table>


        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('custom_style')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        .action_btn {
            width: 100px !important;
        }
    </style>
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootbox.js"></script>


    <script type="text/javascript">
        $('#employee-list-table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    </script>

@endsection
