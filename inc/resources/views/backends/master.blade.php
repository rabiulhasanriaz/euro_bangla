<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <title>Euro Bangla Expo</title>

    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fonts.googleapis.com.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/ace.min.css" class="ace-main-stylesheet"
          id="main-ace-style"/>

    <link rel="stylesheet" href="{{ asset('assets') }}/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css"/>

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('assets') }}/js/ace-extra.min.js"></script>
    <style>
        #date-time-part {
            margin-left: 20px;
            color: #fff;
            height: auto;
            font-size: 13px;
            text-align: center;
            padding: 3px 8px;
        }
    </style>
    @yield('custom_style')

</head>

<body class="no-skin">

@include('backends.partials.header')


<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    @include('backends.partials.sidebar')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                @yield('page_location')

            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                    @yield('main_content')

                    <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    @include('backends.partials.footer')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->


<script src="{{ asset('assets') }}/js/jquery-2.1.4.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<!-- page specific plugin scripts -->
<script src="{{ asset('assets') }}/js/moment.min.js"></script>

<!-- ace scripts -->
<script src="{{ asset('assets') }}/js/ace-elements.min.js"></script>
<script src="{{ asset('assets') }}/js/ace.min.js"></script>

<script>
    $(document).ready(function () {
        var interval = setInterval(function () {
            var momentNow = moment();
            $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                + momentNow.format('dddd')
                    .substring(0, 3).toUpperCase());
            $('#time-part').html(momentNow.format('hh:mm:ss A'));
        }, 100);

        $('#stop-interval').on('click', function () {
            clearInterval(interval);
        });
    });

</script>

@yield('custom_script')


</body>
</html>
