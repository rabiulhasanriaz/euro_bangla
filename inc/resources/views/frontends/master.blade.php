
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>EURO BANGLA EXPO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{ asset('assets') }}/frontends/css/bootstrap.css" rel='stylesheet' type='text/css' />
	
	<link href="{{ asset('assets') }}/frontends/css/style.css?v=1.1.3" rel='stylesheet' type='text/css' />
	<link href="{{ asset('assets') }}/frontends/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
        
    @yield('custom_style')
</head>

<body>

    @include('frontends.partials.header_content')

    @yield('content_section')




    @include('frontends.partials.footer_content')

    <!-- js -->
    <script src="{{ asset('assets') }}/frontends/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- desoslide-JavaScript -->
    {{-- <script src="{{ asset('assets') }}/frontends/js/jquery.desoslide.js"></script> --}}
    

    @yield('custom_script')


    
    <script src="{{ asset('assets') }}/frontends/js/jquery.flexisel.js"></script>
    <!-- //password-script -->
    <!--/ start-smoth-scrolling -->
    <script src="{{ asset('assets') }}/frontends/js/move-top.js"></script>
    <script src="{{ asset('assets') }}/frontends/js/easing.js"></script>
    <script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 900);
        });
    });
    </script>
    <!--// end-smoth-scrolling -->
    <script>
    $(document).ready(function () {
    
                    var defaults = {
                        containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                    };
    
    
        $().UItoTop({
        easingType: 'easeOutQuart'
        });
    
    });


            // Set the date we're counting down to
        var countDownDate = new Date("Apr 10, 2020 23:59:59").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        <!--var seconds = Math.floor((distance % (1000 * 60)) / 1000);-->
        <!--if (seconds < 10) {-->
        <!--    seconds = '0'+ seconds;-->
        <!--}-->
        if (minutes < 10) {
            minutes = '0'+ minutes;
        }
        if (hours < 10) {
            hours = '0'+ hours;
        }
        if (days < 10) {
            days = '0'+ days;
        }
            
        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + "DAYS-" + hours + "HOURS-"
        + minutes + "MINS";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Started";
        }
        }, 1000);
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
    </a>
    <!-- //Custom-JavaScript-File-Links -->
    <script src="{{ asset('assets') }}/frontends/js/bootstrap.js"></script>
</body>
</html>
     