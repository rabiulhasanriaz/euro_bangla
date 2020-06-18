<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand" style="padding: 0;margin-left: -10px;">
                <img src="{{ asset('assets') }}/images/igl_logo.png" alt="IGL WEB LTD" class="nav-user-photo"
                     style="height: 45px; width: 190px; padding: 0; background-color: #fff;">
            </a>
        </div>
        <div class="navbar-header pull-center">
            <div id="date-time-part">
                <div id="date-part"></div>
                <div id="time-part"></div>
            </div>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation" style="margin-right: -10px;">
            <ul class="nav ace-nav">

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{ asset('assets') }}/images/avatars/avatar4.png"
                             alt="Jason's Photo"/>
                        <span class="user-info">
								<small>Welcome,</small>
                            Demo
							</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"
                        style="">
                        <li>
                            <a href="{{ route('backend.profile.show') }}">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('backend.change-password') }}">
                                <i class="ace-icon fa fa-cog"></i>
                                Change Password
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
