<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cánh cụt shop</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
</head>
<body>
	@include('partials.cover')
	@include('partials.navbar')
	<div class="space-3"></div>
		@yield('body.content')
	@include('partials.footer')
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/livesearch.js')}}"></script>
</body>
</html>