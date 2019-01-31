<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Buba Manjang | </title>
		<meta name="description" content="A simple grid-powered multibox menu that shows with a reveal animation." />
		<meta name="keywords" content="slideshow, reveal, effect, animation, web design, template, demo" />
        <meta name="author" content="Buba Manjang" />
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-menu" viewBox="0 0 119 25">
				<title>menu</title>
				<path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/>
			</symbol>
			<symbol id="icon-close" viewBox="0 0 24 24">
				<title>close</title>
				<path d="M24 1.485L22.515 0 12 10.515 1.485 0 0 1.485 10.515 12 0 22.515 1.485 24 12 13.484 22.515 24 24 22.515 13.484 12z"/>
			</symbol>
		</svg>

		<main>
			<div class="frame">
				<header class="codrops-header">
					<div class="codrops-links">
						<a class="codrops-icon codrops-icon--drop" href="{{ URL('/') }}" title="Site Title">Manjang</a>
					</div>
				</header>
				<p class="info">Work hours: 09:00 &mdash; 19:00 &middot; Sterling Heights &middot; Michigan &middot; USA</p>
			</div>

			@yield('content')

			<nav class="menu">
				<div class="menu__item menu__item--1" data-direction="bt">
					<div class="menu__item-inner">
						<div class="mainmenu">
							<a href="{{ URL('/') }}" class="mainmenu__item">Home</a>
							<a href="{{ URL('/story') }}" class="mainmenu__item">Story</a>
                            <a href="#" class="mainmenu__item">Portfolio</a>
							<a href="#" class="mainmenu__item">Contact</a>
						</div>
						<p class="label label--topleft label--vert-mirror">the important stuff</p>
						<p class="label label--bottomright label--vert">buba manjang</p>
					</div>
				</div>

				<div class="menu__item menu__item--2" data-direction="lr">
					<div class="menu__item-inner">
						<div class="menu__item-map"></div>
						<a href="#" class="menu__item-hoverlink">The location</a>
					</div>
				</div>

				<div class="menu__item menu__item--3" data-direction="bt">
					<div class="menu__item-inner">
						<div class="sidemenu">
							<a href="{{ URL('/buba-the-entrepreneur') }}" class="sidemenu__item"><span class="sidemenu__item-inner">The Entrepreneur</span></a>
							<a href="{{ URL('/mobile-application-development') }}" class="sidemenu__item"><span class="sidemenu__item-inner">Mobile App</span></a>
							<a href="{{ URL('/website-design-development') }}" class="sidemenu__item"><span class="sidemenu__item-inner">Websites</span></a>
							<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">Marketing</span></a>
							<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">Branding</span></a>
							<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">Affiliate</span></a>
                            <a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">...</span></a>
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="sidemenu__item"><span class="sidemenu__item-inner">Login</span></a>
                                <a href="{{ route('register') }}" class="sidemenu__item"><span class="sidemenu__item-inner">Join the Community</span></a>
                            @else
                                <a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">Profile</span></a>
                                <a href="{{ route('logout') }}" class="sidemenu__item"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <span class="sidemenu__item-inner">Logout</span>
                                </a>
                            @endif
						</div>
					</div>
				</div>

				<div class="menu__item menu__item--4" data-direction="rl">
					<div class="menu__item-inner">
						<p class="label label--topleft label--line">Need my service?</p>
						<a href="contact.html" class="menu__item-link">Contact me to <br> discuss your project</a>
					</div>
				</div>

				<div class="menu__item menu__item--5" data-direction="tb">
					<div class="menu__item-inner">
						<p class="quote">Are you looking for a Website Developer, Mobile App Developer, Digital Marketer etc.?</p>
					</div>
				</div>
				<button class="action action--menu"><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
				<button class="action action--close"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></button>
			</nav>
		</main>

	</body>
</html>