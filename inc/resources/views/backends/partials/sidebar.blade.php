
<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="@yield('dashboard_menu_class')">
            <a href="{{ route('backend.dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>


        <!--Images-->
        <li class="@yield('image_menu_class')">
            <a href="{{ route('backend.image.index') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Images
                </span>
            </a>
        </li>


        <!--Menu-->
        <li class="@yield('menu_menu_class')">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
						Menu
					</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="@yield('create_menu_menu_class')">
                    <a href="{{ route('backend.menu.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Menu
                    </a>
                </li>

                <li class="@yield('menu_list_menu_class')">
                    <a href="{{ route('backend.menu.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Menu List
                    </a>
                </li>
            </ul>
        </li>

        <!--Sub-Menu-->
        <li class="@yield('sub_menu_menu_class')">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
						Sub-Menu
					</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="@yield('create_sub_menu_menu_class')">
                    <a href="{{ route('backend.sub-menu.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Sub-Menu
                    </a>
                </li>

                <li class="@yield('sub_menu_list_menu_class')">
                    <a href="{{ route('backend.sub-menu.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sub-Menu List
                    </a>
                </li>
            </ul>
        </li>

        <!--Students-->
        <li class="@yield('student_menu_class')">
            <a href="{{ route('backend.student.index') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Students
                </span>
            </a>
        </li>

        
        <!--Institutions-->
        <li class="@yield('institute_menu_class')">
            <a href="{{ route('backend.institute.index') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Institutes
                </span>
            </a>
        </li>
        <li class="@yield('visitor_menu_class')">
            <a href="{{ route('backend.visitor.index') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Visitor
                </span>
            </a>
        </li>
        
        <!--Feedback-->
        <li class="@yield('feedback_menu_class')">
            <a href="{{ route('backend.feedback.index') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Feedback Messages
                </span>
            </a>
        </li>

        <li class="@yield('pdf_menu_class')">
            <a href="{{ route('backend.pdf.create') }}" class="">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Upload PDF
                </span>
            </a>
        </li>

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </ul>
</div>
