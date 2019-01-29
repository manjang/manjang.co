@extends('layouts.app')

@section('content')
			
            <div class="content">
                <div class="background" style="background-image: url({{ URL('images/bg.jpg') }})"></div>

                <div class="entrepreneur">
                    <div class="entrepreneur-inner">
                        <h4 class="subheadline">What Makes Buba an</h4>
                        <h2 class="headline">Entrepreneur</h2>
        
                        <div class="center">
                            <figure>
                                <div class="divider">
                                    <img src="{{ URL('images/blue_line.png') }}" alt="">
                                </div>
                            </figure>
                        </div>
                        
                        <div class="entrepreneur-desc">
                            <h5 class="subheadline">Entrepreneurial Journey</h5>
        
                            <p class="entrepreneur-links">
                                <a href="http://www.quest.gm" target="_blank" rel="noopener">Quest Digital A. A.</a>
                                &nbsp; &nbsp; /&nbsp; &nbsp;
                                <a href="#" target="_blank" rel="noopener">Smart Laundry</a>
                                &nbsp; &nbsp; /&nbsp; &nbsp;
                                <a href="http://www.zahras.gm" target="_blank" rel="noopener">Zahras Fashion</a>
                                &nbsp; &nbsp; /&nbsp; &nbsp;
                                <a href="http://www.effoh.com" target="_blank" rel="noopener noreferrer">Effoh</a>
                            </p>
        
                            <p class="entrepreneur-content">
                                I am driven by a fierce desire to create, learn about new trends and to identify and solve problems. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo pariatur ut eos harum culpa hic totam, quidem, sunt fugiat modi minima. Perspiciatis harum quisquam provident iure porro dicta omnis? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias quas laudantium modi in nisi totam quo nesciunt amet impedit, aliquid explicabo a officia, porro doloremque pariatur nulla fugiat libero eos?
                            </p>
        
                            <div class="entrepreneur-logos">
                                <div class="entrepreneur-logo--inner">
                                    <span class="entrepreneur-logo"><img src="{{ URL('images/favicon.png') }}" alt=""></span>
                                    <span class="entrepreneur-logo"><img src="{{ URL('images/quest-logo.png') }}" alt=""></span>
                                    <span class="entrepreneur-logo"><img src="{{ URL('images/favicon.png') }}" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
@endsection