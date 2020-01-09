<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Rakho</title>

        <!-- Fonts -->
        <!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="style.css">

       
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  
        <link rel="stylesheet" href="{{ asset('/assets/home/style.css') }}">
       

    
       
    </head>
    <body>
        <div >
            <div id="app">
                <master></master>
            </div>
            <script>
        (function () {
               window.Laravel = {
                   csrfToken: '{{ csrf_token() }}'
               };
               @if(Auth::check())
                 window.authUser={!! Auth::user() !!}
                 @else
                   window.authUser=false
                   
                 @endif
           })();
       </script>
        </div>
        <script src="assets/js/jquery-1.12.0.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('/assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/js/custom.js') }}" type="text/javascript"></script>


	<script>
		$(document).ready(function () {
			// Add smooth scrolling to all links
			$("a").on('click', function (event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function () {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});
	</script>
        <script src="/js/app.js"></script>
    </body>
</html>