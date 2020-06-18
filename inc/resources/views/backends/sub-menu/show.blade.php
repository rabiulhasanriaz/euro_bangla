@extends('backends.master')

@section('company_menu_class','open active')
@section('create_company_menu_class','active')

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
                    <a href="{{ route('backend.sub-menu.index') }}" class="btn btn-default btn-sm">List</a>
                    <a href="{{ route('backend.sub-menu.edit', $sub_menu->id) }}" class="btn btn-default btn-sm">Edit</a>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-md-7">
                                <form class="form-horizontal" action="#" method="post">

                                    <div class="form-group">
                                        <label for="menu"
                                               class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                            Menu :
                                        </label>
                                        <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="menu" name="menu"
                                                       placeholder="Menu" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->menuInfo->title }}" disabled/>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title"
                                               class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                            Title :
                                        </label>
                                        <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="title" name="title"
                                                       placeholder="Title" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->title }}" disabled/>
                                            </span>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="content"
                                               class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                            Content :
                                        </label>
                                        <div class="col-xs-12 col-sm-9">
                                            {!! $sub_menu->content !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="created_at"
                                               class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                            Created At :
                                        </label>
                                        <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="created_at" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->created_at }}" disabled/>
                                            </span>
                                        </div>
                                    </div>

                                    @if(!empty($sub_menu->created_by))
                                        <div class="form-group">
                                            <label for="created_by"
                                                   class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                                Created By :
                                            </label>
                                            <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="created_by" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->createdInfo->name }}" disabled/>
                                            </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if(!empty($sub_menu->updated_at))
                                        <div class="form-group">
                                            <label for="updated_at"
                                                   class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                                Last Modified :
                                            </label>
                                            <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="updated_at" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->updated_at }}" disabled/>
                                            </span>
                                            </div>
                                        </div>
                                    @endif

                                    @if(!empty($sub_menu->updated_by))
                                        <div class="form-group">
                                            <label for="updated_by"
                                                   class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">
                                                Modified By :
                                            </label>
                                            <div class="col-xs-12 col-sm-9">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" id="updated_by" class="col-xs-12 col-sm-8"
                                                       value="{{ $sub_menu->updatedInfo->name }}" disabled/>
                                            </span>
                                            </div>
                                        </div>
                                    @endif
                                </form>
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