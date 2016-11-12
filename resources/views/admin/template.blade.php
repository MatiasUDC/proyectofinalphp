<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>My Laravel - Dashboard</title>
	


<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

	 <link href="/css/app.css" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



	

	@include('admin.partials.nav')
	
	@if(\Session::has('message'))
		@include('admin.partials.message')
	@endif
	


	@yield('content')

	@include('admin.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>