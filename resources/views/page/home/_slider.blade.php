@if ($section === 'header')
    <div class="swiper-slide">
        <div class="hero-area hero-slide" style="background-image:url({{ $data['bg'] }});">
            <div class="overlay overlay-5"></div>
            <div class="container">
                <div class="row full-height align-items-center text-center">
                    <div class="col p-100px-t p-50px-b slider-text">
                        <h4 class="tlt1">{{ $data['title'] }}</h4>
                        <div class="divider-circle mt-4"></div>
                        <h2 class="text-capitalize m-35px-tb tlt">{{ $data['detail'] }}</h2>
                        <div class="hero-btn-wrapper">
                            <a href="#contact" class="btn btn-default btn-default-outline">Contact us</a>
                            <a class="btn btn-default" href="#">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif ($section === 'donation')
@endif
