@extends('layouts.app')

@section('content')
			<div class="content about">
				<div class="background" style="background-image: url({{ URL('images/bg.jpg') }})"></div>
				
				<div class="about__content">
                    <p class="content__tagline">Brief Bio</p>
                    <p>Over 5 years of experience in all facets of web development, from personally meeting with clients to discuss their goals in having a web presence, to research and analysis, design, development, testing, and implementation of code and applications, as well as a variety of graphic design and artwork. Has been both a team leader and a team member, and knows what it takes to get things done. Doesn’t only create working inter/intranet sites, but creates better ones and continually strives to improve a site’s usability, functionality, and navigation throughout its lifecycle.</p>
                    <p>I work with the most recent proven technologies on the market to deliver tailor-made, high quality functional websites to showcase your products and services, and drive your visibility and growth.</p>
					<div class="about__image">
						<img src="{{ URL('images/favicon.png') }}" alt="Buba Manjang" width="150px" height="120px">
					</div>
                </div>
			</div>
@endsection