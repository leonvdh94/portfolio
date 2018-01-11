@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 border-bottom">
			<h1>Hi there, </h1>
			<h2>I'm Leon van der Houven. <br>A webdevelopment student <br>from the Netherlands.</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h3>Skills</h3>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-4 border-bottom">
			HTML
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			CSS
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			PHP
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Laravel
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Wordpress
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
		
		<div class="col-md-4 border-bottom">
			MySQL
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Git
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Bootstrap
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Communication
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			Teamwork
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Wishlist App</h5>
					<div class="card-subtitle text-gray">
						School Project WIP
					</div>
					<p class="card-text">An online application to manage wishlists for events. Developed in React and Node.js.</p>
					<a href="https://github.com/leonvdh94/wishlistapp" class="btn btn-primary">More info</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Movie Database</h5>
					<div class="card-subtitle text-gray">School Project</div>
					<p class="card-text">An online database for movies and tv-shows created with Laravel.</p>
					<a href="https://github.com/leonvdh94/moviedatabase" class="btn btn-primary">More info</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center border-bottom">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Other</h5>
					<div class="card-subtitle text-gray">
						
					</div>
					<p class="card-text">Check here for other projects made by me</p>
					<a href="https://github.com/leonvdh94" class="btn btn-primary">More info</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">More coming</h5>
					<div class="card-subtitle text-gray"></div>
					<p class="card-text">Keep an eye out for more projects!</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection