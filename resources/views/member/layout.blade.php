<!DOCTYPE html>
<html>
<head>
	<title>Utime</title>

	

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Custom css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- fonts import -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Saira+Semi+Condensed&display=swap" rel="stylesheet">

	@yield('customlinkcss')

	<!-- Javascript -->
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
	<script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/bootstrap-material-design.min.js"></script>
	<script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/moment.min.js"></script>
	<script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>
	<script src="{{ asset('/js/main.js') }}"></script>

	@yield('customlinkjs')
</head>
<body>

	<!-- Nav section -->
	<div id="nav-bar">
		<nav class="navbar navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">
		    <img src="{{ asset('/css/img/finallogo.png') }}" width="130" height="50" alt="logo">
		  </a>
		</nav>
	</div>

	@yield('content')

</body>
</html>