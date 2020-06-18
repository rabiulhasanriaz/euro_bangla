@extends('backends.master')

@section('sub_menu_menu_class','open active')
@section('sub_menu_list_menu_class','active')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li class="active">Menu List</li>
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
                    <th>Menu</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th class="action_btn">Action</th>
                </tr>
                </thead>

                <tbody>

                <!-- employee lists -->
                @if(!empty($sub_menus))
                    @foreach($sub_menus as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->menuInfo->title }}</td>
                            <td>{{ $row->title }}</td>
                            <td class="text-{{ ($row->status=='1')? 'success':'danger' }}">{{ ($row->status=='1')? 'Active':'Inactive' }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('backend.sub-menu.show', $row->id) }}"
                                       class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-eye bigger-120"></i>
                                    </a>

                                    <a href="{{ route('backend.sub-menu.edit', $row->id) }}" class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
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
    <style>
        .action_btn {
            width: 100px !important;
        }
    </style>
@endsection

@section('custom_script')
    <script src="{{ asset('assets') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootbox.js"></script>
    <script type="text/javascript">
        $('#employee-list-table').DataTable();
    </script>

@endsection
