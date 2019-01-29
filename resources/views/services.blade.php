@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="background" style="background-image: url( {{ URL('images/bg.jpg') }} )"></div>
        
        <div class="services">
            <div class="services-inner">
                <h2 class="services-headline">SERVICES</h2>
                <p class="services-subheadline">Buba is an expert in delivering high perfomance and scalable enterprise mobile apps in Android and IOS.</p>
                <p class="services-subheadline">It doesn't matter if you are a small-scale business, a unicorn startup or an enterprise, the development process stays the same, which has awesome written all over it.</p>

                <div class="service-cards">
                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/conection.svg" alt=""></div>
                        <h3 class="service-headline">IOS.</h3>
    
                        <div class="service-content">
                            Do you think that you have a great idea for your IOS platform but want to turn it into reality? Well, this is where I come in. Contact me today to start on your project.
                        </div>
                    </div>
    
                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/website-design.svg" alt=""></div>
                        <h3 class="service-headline">Android.</h3>
    
                        <div class="service-content">
                            I always strive to develop feature rich android apps that ensures the end product is easy to use, and is a hit among users.
                        </div>
                    </div>
    
                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/devices.svg" alt=""></div>
                        <h3 class="service-headline">React Native.</h3>
    
                        <div class="service-content">
                            
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/conection.svg" alt=""></div>
                        <h3 class="service-headline">IOS.</h3>
    
                        <div class="service-content">
                            Do you think that you have a great idea for your IOS platform but want to turn it into reality? Well, this is where I come in. Contact me today to start on your project.
                        </div>
                    </div>
    
                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/website-design.svg" alt=""></div>
                        <h3 class="service-headline">Android.</h3>
    
                        <div class="service-content">
                            I always strive to develop feature rich android apps that ensures the end product is easy to use, and is a hit among users.
                        </div>
                    </div>
    
                    <div class="service-card">
                        <div class="service-icon"><img src="assets/images/devices.svg" alt=""></div>
                        <h3 class="service-headline">React Native.</h3>
    
                        <div class="service-content">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection