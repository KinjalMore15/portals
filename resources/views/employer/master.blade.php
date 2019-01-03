<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OPT Nation</title>


	    @include('employer.style')

	    <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
  	</head>
  <body >  
  <div id="wrapper" class=""> 	
        @include('employer.header')

  <div id="page-wrapper" style="min-height: 142px;">      

              @yield('employer.titel')
          		@yield('employer.container')
     
      	
        @include('employer.footer')
    	
    </div>
  </div>
	<!-- #main -->
    

    @include('employer.script')

  </body>
</html>