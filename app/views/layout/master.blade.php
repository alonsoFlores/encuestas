<!doctype html>
<html lang="en">
<head>
	<title>{{ $title }}</title>
	<link href={{URL::asset("css/application.min.css")}} rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="" style="">
	<div class="logo">
	    <h4><a href="/">VisionTrade</a></h4>
	</div>
	@include('layout.nav')
	<div class="wrap">
		@include('layout.header')
		<div class="content container">
			<div class="row">
		        <div class="col-md-12">
		            <h2 class="page-title">{{ $title }} <small>{{ $sub }}</small></h2>
		        </div>
		    </div>
			@yield('content')
		</div>
	</div>	

	@include('layout.footer')
</body>
</html>