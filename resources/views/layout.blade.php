<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'bWork')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<header class="jumbotron">
		<div class="container">
			@yield('header')
		</div>
	</header>
	<section class="container">
		@yield('content')
	</section>
</body>
</html>