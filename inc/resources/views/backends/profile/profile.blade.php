@extends('backends.master')

@section('page_location')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li class="active">Profile</li>
    </ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
    @include('backends.partials.confirm')
    <div class="space-6"></div>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-container">

            @include('backends.partials.session_messages')

            <form>
                <div id="user-profile-1" class="user-profile row">


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3 class="text-center text-primary">Account Information</h3>
                            <hr>
                            <div class="col-sm-offset-2 col-xs-12 col-sm-8 col-md-8 col-lg-8 center">
                                {{-- <div>
                                    <span class="profile-picture">
                                        <img id="avatar" class="editable img-responsive" alt="Alex's Avatar"
                                             src="{{ asset('assets') }}/cm.jpg" style="max-width: 200px;"/>
                                    </span>
                                    <div class="space-4"></div>
                                </div> --}}

                                <div class="profile-user-info profile-user-info-striped align-left">
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Name</div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="username">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Email</div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="email">
                                                {{ Auth::user()->email }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Mobile</div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="mobile">
                                                {{ Auth::user()->mobile_number }}
                                            </span>
                                        </div>
                                    </div>


                                </div>
                                <a href="{{ route('backend.profile.edit') }}" class="btn btn-default align-center">Edit</a>
                            </div>


                        </div>
                        <br>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.col -->
    </div>

@endsection
