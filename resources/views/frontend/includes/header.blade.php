<header class="header">
    @include('frontend.includes.topbar')

    <div class="header-inner3" style="background-color: #26d4d4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="logo">
                        <a href="/"> <img src="{{Vite::asset('resources/images/cambridge_logo.png')}}" alt="#"></a>
                    </div>

                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fas fa-phone"></i>
                            <h4>Call Now <span><a href="#">+91-0123456789</a></span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fas fa-envelope"></i>
                            <h4>Email Us<span><a href="#">xyz@gmail.com</a></span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>Our Location<span><a href="#">Kheriya Rafatpur, Aligarh,UP(India)</a></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.navbar')
</header>
