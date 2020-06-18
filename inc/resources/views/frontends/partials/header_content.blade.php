
<header>
    <div class="top-bar_sub_w3layouts container-fluid">
      <div class="row">
        <div class="col-md-5 logo text-left">
          <a class="navbar-brand" href="{{ route('show-index') }}">
            <img src="{{ asset('assets') }}/frontends/images/logo.png" style="width:100%;" alt="">	</a>
        </div>
        <div class="col-md-1">
            
        </div>
        <!-- <a href="{{ route('area') }}">area</a> -->
        <div class="col-md-6 top-forms text-left mt-lg-3 mt-md-1 mt-0">
          <div class="row">
            <div class="col-md-12 text-center">
            <span class="iglweb_header">
            <a class="btn registration_buttons" href="{{ route('institute-register') }}">
              <i class="far fa-user"></i> REGISTER AS EXHIBITOR</a>
              </span>
    
            <span class="iglweb_header">
              <a class="btn registration_buttons" href="{{ route('student-register') }}">
                <i class="far fa-user"></i> REGISTER AS STUDENT</a>
            </span>
            <span class="iglweb_header">
              <a class="btn registration_buttons" href="{{ route('visitor-registration') }}">
                <i class="far fa-user"></i> REGISTER AS VISITOR</a>
            </span>
          </div>
          <div class="col-md-12">
          <p class="text-left" style="font-size: 16px; color: blue;     background-color: #e8dfdf; padding: 7px; border-radius: 10px;"> Join South Asia's most prestigious educational fair in Bangladesh<br> 11—15 April 2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-info btn-xs" style="padding: 5px 10px; background-color: #ee2946;"><b>Remaining:</b> <span id="countdown"></span></button> </p>
        </div>
        </div>
      </div>
      
    </div>
  
    <div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('/'))? 'active':'' }}">
            <a class="nav-link" href="{{ route('show-index') }}">
                Home
            </a>
            </li>

            @if(!empty($menus))

                @if ((\Request::is('/')) || (\Request::is('pdf/file-pdf')) || (request()->segment(2) == ""))
                    @php($current_url = "jksdhfkj")                  
                    @php($active_url = "")
                @else   
                    @php($current_url = request()->segment(2))
                    @php($active_url = App\Models\ConfigMenu::active_menu($current_url))
                @endif

                @foreach ($menus as $menu)
                    @if(count($menu->subMenus) > 0)
                        <li class="nav-item dropdown {{ ($menu->slug == $active_url)? 'active':'' }}" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ $menu->title }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if(!empty($menu->subMenus))
                                    <a class="dropdown-item" href="#"></a>
                                    @foreach ($menu->subMenus as $subMenu)
                                    @if($menu->status == 1)
                                        <a class="dropdown-item {{ ($subMenu->slug == $current_url)? 'active':'' }}" href="{{ route('show-page', $subMenu->slug) }}">{{ $subMenu->title }}</a>
                                        @if(!$loop->last)
                                            <div class="dropdown-divider"></div>
                                        @endif
                                    @endif
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    @else 
                        <li class="nav-item {{ ($menu->slug == $active_url)? 'active':'' }}">
                            <a class="nav-link" href="{{ route('show-page', $menu->slug) }}">{{ $menu->title }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
            <li class="nav-item {{ (request()->is('pdf/file-pdf'))? 'active':'' }}">
                <a class="nav-link" href="{{ route('pdf.file-pdf') }}">pdf</a>
            </li>
            
            {{-- <li class="nav-item ">
                <a class="nav-link" href="{{ route('show-audience') }}" >
                    Audience
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('feedback') }}">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('location-one') }}">Location One</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('location-two') }}">Location Two</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('location-three') }}">Location Three</a>
  
                </div>
            </li> --}}

        </ul>

        </div>
    </nav>

    </div>
  </header>
  