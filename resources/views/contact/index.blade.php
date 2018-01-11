@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5">
			<h2>Contact Us</h2>
			<p>Feel free to contact me at any time by sending an email or calling and I get back to you as soon as possible. Follow me on social media to be updated on my latest projects.</p>
		</div>
		<div class="col-md-3">
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

</div>

@endsection

