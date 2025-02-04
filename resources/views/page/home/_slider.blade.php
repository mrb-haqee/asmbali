@if ($section === 'header')
    <div class="swiper-slide">
        <div class="hero-area hero-slide" style="background-image:url('{{ $data['bg'] }}');">
            <div class="overlay overlay-5"></div>
            <div class="container">
                <div class="row full-height align-items-center text-center">
                    <div class="col p-100px-t p-50px-b slider-text">
                        <div class="d-flex justify-content-center align-content-center mb-3">
                            <img src="{{ asset('img/logos/logo-asm.png') }}" style="width: 150px" alt="logo asm">
                        </div>
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
    <div class="swiper-slide">
        <div class="col">
            <article class="content-box diffuse-shadow bg-light p-10px">
                <div class="btn-relative-img text-center overlay overlay-5">
                    <img src="{{ $data['bg'] }}" alt="">
                    <div class="lightbox-icons">
                        <a href="{{ $data['bg'] }}" class="causes-lightbox" title="Donate for victims">
                            <i class="icofont-image"></i>
                        </a>
                        <button class="js-modal-btn" data-video-id="{{ $data['videoId'] }}">
                            <i class="icofont-video-alt"></i>
                        </button>
                        <a href="{{ $data['linkBlog'] }}">
                            <i class="icofont-external-link"></i>
                        </a>
                    </div>
                    <a href="{{ $data['linkBlog'] }}" class="btn btn-default btn-small">Donate</a>
                </div>
                <div class="content-area mt-2 p-10px">
                    <h3><a href="{{ $data['linkBlog'] }}">{{ $data['title'] }}</a></h3>
                    <p>{{ $data['subject'] }}</p>
                </div>
                <div class="progress-bars m-35px-b m-10px-t p-10px-l p-10px-r">
                    <div class="progress">
                        <div class="progress-bar" data-value="{{ $data['progres'] }}"
                            style="width: {{ $data['progres'] }}%;">
                            <span>{{ $data['progres'] }}%</span>
                        </div>
                    </div>
                </div>
                <footer class="content-footer p-10px-l p-10px-r">
                    <p class="content-raised">
                        Raised:<br><b>${{ $data['raised'] }}</b>
                    </p>
                    <p class="content-goal">
                        Goal:<br><b>${{ $data['goals'] }}</b>
                    </p>
                    <p class="content-raised">
                        Donors:<br><b>{{ $data['donated'] }} Donors</b>
                    </p>
                    <p class="content-goal">
                        Time left:<br><b>{{ $data['timeLeft'] }} days</b>
                    </p>
                </footer>
            </article>
        </div>
    </div>
@endif
