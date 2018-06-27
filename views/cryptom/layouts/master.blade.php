<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
	

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- <link href=" asset('css/bootstrap.min.css') " rel="stylesheet"> -->

    <!-- Fonts -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @yield('fonts')
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

	-->

	<!-- Custom CSS -->
	@yield('styles')

</head>
<body>

	<!-- div za vue -->
	<div id="app">
	@include('partials.header')

	@yield('content')

	@yield('footer')

	</div> <!-- /. div za vue -->

	<!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>





    <!-- Vue -->
  
	<!--  
    <script src=" asset('js/vue.js') }}">
    	

			const vidik = new Vue({
			    el: '#content'
			});




    </script>
	-->
  
     


   <!--	<script src="  asset('js/app.js')  }}"></script> -->
    <!-- custom scripts -->
    @yield('scripts')
  
    <!--
    <script src="js/bootstrap.min.js"></script> 
	<script src=" asset('js/jquery.js') }}"></script>			
	<script src=" asset('js/bootstrap.js') }}"></script>		
	<script src=" asset('js/app.js') }}"></script>			
	-->

</body>
</html>