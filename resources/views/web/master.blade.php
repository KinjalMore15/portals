<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OPT Nation</title>


	    @include('web.style')

	    <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
  	</head>
  <body class="theme-style-1">   	

	<div id="wrapper">
        @if(Auth::user())
        @include('web.header')
        @else
        @include('web.home_header')
        @endif
        @yield('web.banner')

          	<div id="main">

          		@yield('web.main')

      		</div>
      	<footer id="footer">
        @include('web.footer')
    	</footer>
    </div>
	<!-- #main -->
    

    @include('web.script')

  </body>
</html>