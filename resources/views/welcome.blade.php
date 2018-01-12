@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
	<div id="section-1"></div>
	<div class="col-md-10 border-bottom">
		<h1>Hi there, </h1>
		<h2>I'm Leon van der Houven. <br>A webdevelopment student <br>from the Netherlands.</h2>
	</div>
</div>
{{--  --}}
<div class="row justify-content-center titlespace">
	<div class="col-md-10">
		<h3>Skills</h3>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-5 border-bottom">
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
	<div class="col-md-5 border-bottom">
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
{{--  --}}
<div class="row justify-content-center titlespace">
	<div id="section-2"></div>
	<div class="col-md-10">
		<h3>My Projects</h3>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-5">
		<div class="card">
			<a href="https://github.com/leonvdh94/wishlistapp" class="cardlink" target="_blank">
				<img class="card-img-top image" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
			</a>
			<div class="card-body">
				<h5 class="card-title">Wishlist App</h5>
				<div class="card-subtitle text-gray">
					School Project WIP
				</div>
				<p class="card-text">An online application to manage wishlists for events. Developed in React and Node.js.</p>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="card">
			<a href="https://github.com/leonvdh94/moviedatabase" class="cardlink"target="_blank">
				<img class="card-img-top image" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
			</a>
			<div class="card-body">
				<h5 class="card-title">Movie Database</h5>
				<div class="card-subtitle text-gray">School Project</div>
				<p class="card-text">An online database for movies and tv-shows created with Laravel.</p>
			</div>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-5 border-bottom">
		<div class="card">
			<a href="https://github.com/leonvdh94" class="cardlink" target="_blank">
				<img class="card-img-top image" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
			</a>
			<div class="card-body">
				<h5 class="card-title">Other</h5>
				<div class="card-subtitle text-gray">	
				</div>
				<p class="card-text">Check here for other projects made by me.</p>
			</div>
		</div>
	</div>
	<div class="col-md-5 border-bottom">
		<div class="card">
			<a href="#" class="cardlink">
				<img class="card-img-top image" src="{{secure_asset('img/github.jpg')}}" alt="Card image cap">
			</a>
			<div class="card-body">
				<h5 class="card-title">More coming</h5>
				<div class="card-subtitle text-gray"></div>
				<p class="card-text">Keep an eye out for more projects!</p>
			</div>
		</div>
	</div>
</div>
{{--  --}}
<div class="row justify-content-center">
	<div id="section-3"></div>
	<div class="col-md-6 border-bottom">
		<h2>Contact Us</h2>
		<p>Feel free to contact me at any time by sending an email or calling and I get back to you as soon as possible. Follow me on social media to be updated on my latest projects.</p>
	</div>
	<div class="col-md-4 border-bottom">
		<dl>
			<dt>Email</dt>
			<dd><a href="mailto:lvdhouven94@gmail.com" title="Click to send me an email">lvdhouven94@gmail.com</a></dd>
			<dt>Telephone</dt>
			<dd><a href="tel:0646856932" title="Click to call me">0646856932</a></dd>
			<dd class="social-links">
				<dt>Social Media</dt>
				<a href="#" title="Find me on Facebook">
					<img class="social" src="{{asset('img/fb.jpg')}}" alt="Facebook logo">
				</a>	
				<a href="#" title="Find me on Twitter">
					<img class="social" src="{{asset('img/tt.jpg')}}" alt="Twitter logo">
				</a>
			</dd>
		</dl>

	</div>
</div>
{{--  --}}

@endsection
