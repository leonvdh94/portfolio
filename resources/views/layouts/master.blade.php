<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Portfolio van Leon van der Houven">
	<meta name="author" content="Leon van der Houven">
	<title>Leon van der Houven</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<script src="{{secure_asset('js/functions.js')}}"></script>

</head>
<body>
	<header>
		<div class="container border-bottom" style="padding-bottom: 20px">
			<a id="top"></a>
			<div class="row justify-content-center">
				<img class="img-responsive" src="{{secure_asset('img/logo3.jpg')}}" alt="logo">
			</div>
			<nav class="navbar navbar-expand-lg justify-content-center">
				<ul class="nav">
					<li class="nav-item slash">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link scroll" href="#section-1">About me</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link scroll" href="#section-2">Projects</a>
					</li>
					<li class="nav-item slash">
						<a class="nav-link scroll" href="#section-3">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/leonvdh94" target="_blank">GitHub</a>
					</li>
				</ul>
			</nav>
			<hr style="margin-top: 20px">
		</div>
	</header>

	<div class="container">
		@yield('content')  
	</div>

	<footer>
		<div class="container">
			<div class="row justify-content-center">
				Crafted by Leon van der Houven &bull; 2017
			</div>
		</div>
	</footer>
</body>
</html>