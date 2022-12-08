

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.static.headscript')
	<title>Zane - @yield('title')</title>
</head>

<body>
   <!-- start preloader -->
   <!-- <div class="preloader" id="preloader"></div> -->
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->


		<!--sidebar wrapper -->
      
        @include('backend.static.sidebar')
		<!--end sidebar wrapper -->


		<!--start page wrapper -->
		{{-- CONTENT --}}

        @yield('content')

        {{-- END CONTENT --}}
		<!--end page wrapper -->
		

    @include('backend.static.footscript')
</body>


</html>