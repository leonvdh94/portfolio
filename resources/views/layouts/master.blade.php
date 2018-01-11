<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Portfolio van Leon van der Houven">
	<meta name="author" content="Leon van der Houven">
	<title>Leon van der Houven</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
</head>
<body>
	<header>
		<div class="container border-bottom" style="padding-bottom: 20px">
			<div class="row justify-content-center">
				<img class="img-responsive" src="{{asset('img/logo3.jpg')}}" alt="logo">
			</div>
			<nav class="navbar navbar-expand-lg justify-content-center">
				<ul class="nav">
					<li class="nav-item slash">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link" href="#">About me</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link" href="#">Projects</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link" href="{{url('contact')}}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">GitHub</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	
	
	<div class="container">
		@yield('content')  
	</div>
</body>
</html>