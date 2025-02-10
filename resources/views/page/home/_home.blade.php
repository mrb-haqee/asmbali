<section id="home">
    <div class="swiper-container hero-swiper">
        <div class="swiper-wrapper ">
            @foreach ($dataHome as $row)
                <div class="swiper-slide">
                    <div class="hero-area hero-slide " style="background-image:url('{{ $row['bg'] }}');">
                        <div class="overlay overlay-5"></div>
                        <div class="container">
                            <div class="row full-height align-items-center" style="height: 100vh;">
                                <div class="col p-100px-t p-50px-b slider-text text-center">
                                    <div class="d-flex justify-content-center align-content-center mb-3 fade-in">
                                        <img src="{{ asset('img/logos/asm.png') }}" alt="logo asm"
                                            class="position-relative">
                                    </div>
                                    <h4 class="position-relative">{{ $row['title'] }}</h4>
                                    {{-- <h4 class="tlt1">{{ $row['title'] }}</h4> --}}
                                    <div class="divider-circle mt-4"></div>
                                    <h2 class="text-capitalize m-35px-tb tlt">{{ $row['detail'] }}</h2>
                                    <div class="hero-btn-wrapper">
                                        <a href="#contact" class="btn btn-default btn-default-outline">Contact us</a>
                                        {{-- <a class="btn btn-default" href="#">Donate now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="swiper-pagination"></div>
        <!-- Pagenation -->
    </div>

</section>
