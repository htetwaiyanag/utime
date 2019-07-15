<!DOCTYPE html>
<html>
<head>
	<title></title>

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	{{-- Fontawesome --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	{{-- Fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Saira+Semi+Condensed&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/unicons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/tooplate-style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.min.css') }}">

	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/Headroom.js') }}"></script>
	<script src="{{ asset('/js/jQuery.headroom.js') }}"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/js/smoothscroll.js') }}"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>

</head>
<body>


	@yield('content')

</body>
</html>