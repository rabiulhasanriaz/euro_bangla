<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cPanel Login</title>
    <link rel="shortcut icon"
          href="https://212.74.43.146:2083/cPanel_magic_revision_1368059918/unprotected/cpanel/favicon.ico">

    <!-- EXTERNAL CSS -->
    <link href="{{ asset('assets') }}/index_files/style_v2_optimized.css" rel="stylesheet" type="text/css">


    <![endif]-->

    <script>
        window.DOM = {
            get: function (id) {
                return document.getElementById(id)
            }
        };
    </script>
</head>
<body>

<img class="background-image" src="{{ asset('assets') }}/index_files/login-whisp.png">
<div style="opacity: 1; visibility: visible;" id="login-wrapper">
    <div id="notify">

        @if(session()->has('message'))
            <div id="login-status" class="{{ session()->get('type') }}-notice" style="">
                <span class="login-status-icon"></span>
                <div id="login-status-message">{{ session()->get('message') }}</div>
            </div>
        @else
            <br><br><br>
        @endif
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div id="content-container">
        <div id="login-container">
            <div id="login-sub-container">
                <div id="login-sub-header">
                    <img src="{{ asset('assets') }}/index_files/cpanel-logo.png" alt="logo">
                </div>
                <div id="login-sub">
                    <div id="forms">
                        <form id="login_form" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-req-login">
                                <label for="user">Email/Phone</label>
                            </div>
                            <div class="input-field-login icon username-container">
                                <input name="username" id="user" autofocus="autofocus"
                                       placeholder="Enter your email or phone." class="std_textbox" tabindex="1"
                                       required="" type="text">
                            </div>

                            <div style="margin-top:30px;" class="input-req-login">
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field-login icon password-container">
                                <input name="password" id="pass" placeholder="Enter your account password."
                                       class="std_textbox" tabindex="2" required="" type="password">
                            </div>

                            <div class="controls">
                                <div class="login-btn">
                                    <button type="submit" id="login_submit" tabindex="3">Log in</button>
                                </div>

                                <div class="forgot-password" style="float: right;margin-top: 30px;">
                                    <a href="" style="color: red;">Forgot Password?</a>
                                </div>

                            </div>
                        </form>

                        <!--CLOSE forms -->
                    </div>

                    <!--CLOSE login-sub -->
                </div>
                <!--CLOSE login-sub-container -->
            </div>
            <!--CLOSE login-container -->
        </div>

    </div>
    <!--Close login-wrapper -->
</div>


</body>

</html>
