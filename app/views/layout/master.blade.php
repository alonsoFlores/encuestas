<!doctype html>
<html lang="en">
<head>
	<title>{{ $title }}</title>
	<link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="background-dark">
	<div class="logo">
	    <h4><a href="index.html">Encuesta <strong>VisionTrade</strong></a></h4>
	</div>
	@include('layout.nav')
	<div class="wrap">
		@include('layout.header')
		<div class="content container">
			@yield('content')
		</div>
	</div>	

	@include('layout.footer')
</body>
</html>