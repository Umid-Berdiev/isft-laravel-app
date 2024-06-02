<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, user-scalable=no" />
	<title>International school of Finance and Technology</title>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-touch-icon-57x57.png') }}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-touch-icon-72x72.png') }}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-touch-icon-76x76.png') }}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-touch-icon-114x114.png') }}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-touch-icon-120x120.png') }}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-touch-icon-144x144.png') }}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png') }}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon-180x180.png') }}" />

	<link href="{{ asset('assets/css/404.min.css') }}" rel="stylesheet">	
</head>
<body>
	<div id="wrap">
	    <div id="wordsearch">
	    	<ul>
		        <li class="isft">I</li>
		        <li class="isft">S</li>
		        <li class="isft">F</li>
		        <li class="isft">T</li>
		        <li>i</li>
		        <li>x</li>
		        <li>m</li>
		        <li>e</li>
		        <li>t</li>
		        <li>a</li>
		        <li>x</li>
		        <li>l</li>
		        <li class="one">4</li>
		        <li class="two">0</li>
		        <li class="three">4</li>
		        <li>y</li>
		        <li>y</li>
		        <li>w</li>
		        <li>v</li>
		        <li>b</li>
		        <li>o</li>
		        <li>q</li>
		        <li>d</li>
		        <li>y</li>
		        <li>p</li>
		        <li>a</li>
		        <li class="four">p</li>
		        <li class="five">a</li>
		        <li class="six">g</li>
		        <li class="seven">e</li>
		        <li>v</li>
		        <li>j</li>
		        <li>a</li>
		        <li class="eight">n</li>
		        <li class="nine">o</li>
		        <li class="ten">t</li>
		        <li>s</li>
		        <li>c</li>
		        <li>e</li>
		        <li>w</li>
		        <li>v</li>
		        <li>x</li>
		        <li>e</li>
		        <li>p</li>
		        <li>c</li>
		        <li>f</li>
		        <li>h</li>
		        <li>q</li>
		        <li>e</li>
		        <li class="eleven">f</li>
		        <li class="twelve">o</li>
		        <li class="thirteen">u</li>
		        <li class="fourteen">n</li>
		        <li class="fifteen">d</li>
		        <li>s</li>
		        <li>w</li>
		        <li>q</li>
		        <li>v</li>
		        <li>o</li>
		        <li>s</li>
		        <li>m</li>
		        <li>v</li>
		        <li>f</li>
		        <li>u</li>
	    	</ul>
	    </div>

	    <div id="main-content">
			<h1>We couldn't find what you were looking for.</h1>

			<p>It may be temporarily unavailable, moved or no longer exist.</p>

			<p>Check the URL you entered for any mistakes <br> and try again.</p>
			{{--<p>Alternatively, search
			for whatever is missing or take a look around the rest of our site.</p>--}}

			{{--<div id="search">
				<form>
					<input type="text" placeholder="Search" />
				</form>
			</div>--}}

			<div id="navigation">
				<a class="navigation" href="{{ route('home') }}">Home</a>
				<a class="navigation" href="{{ route('about') }}">About Us</a>
				{{--<a class="navigation" href="">Site Map</a>--}}
				<a class="navigation" href="{{ route('contact') }}">Contact</a>
			</div>
	    </div>
	</div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/404.js') }}"></script>
</body>
</html>