<x-default-layout>
    @section('title')
        ASM BALI
    @endsection

    @section('content')
        <!-- ========== Slider Start ========== -->
        <section id="home">
            <div class="swiper-container hero-swiper">
                <div class="swiper-wrapper">

                    @php
                        $data = [
                            [
                                'bg' => 'img/hero/homeless.jpg',
                                'title' => 'Ajang Silaturahmi Muslim Bali',
                                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
                            ],
                            [
                                'bg' => 'img/hero/camping.jpg',
                                'title' => 'Ajang Silaturahmi Muslim Bali',
                                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
                            ],
                            [
                                'bg' => 'img/hero/kurban.jpg',
                                'title' => 'Ajang Silaturahmi Muslim Bali',
                                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
                            ],
                        ];
                    @endphp

                    @foreach ($data as $row)
                        @include('page.home._slider', ['section' => 'header', 'data' => $row])
                    @endforeach


                </div>

                <div class="swiper-pagination"></div>
                <!-- Pagenation -->
            </div>

        </section>
        <!-- ========== Slider End ========== -->
        <!-- ========== About Start ========== -->
        <section id="about" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 align-self-center" data-aos="fade-up">
                        <img class="img-responsive" src="img/about.jpg" alt="Helping hands">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 align-self-center" data-aos="fade-down">
                        <div class="about-box diffuse-shadow p-45px sm-p-25px bg-white">
                            <h2>Tentang ASM</h2>
                            <div class="divider-dashed m-25px-b"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequatur, labore
                                ipsam laboriosam reiciendis ipsa quibusdam veniam? Fuga, aspernatur dicta.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis minima dolor quaerat
                                maxime veniam? Inventore exercitationem ad a illum temporibus id debitis nemo, natus sint,
                                sed odio quia dolore repudiandae!</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis minima dolor quaerat
                                maxime veniam? Inventore exercitationem ad a illum temporibus id debitis nemo, natus sint,
                                sed odio quia dolore repudiandae!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== About End ========== -->

        <!-- Video Section Start -->
        <section class="p-100px-tb overlay overlay-6 parallax" style="background-image:url(img/bg/video-promo.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center promo-video">
                        <h1 class="m-0px-b">Let's Learn more</h1>
                        <h4 class="m-30px-b sm-m-25px-b">Want to learn more about us? Let's check the video</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4 text-center">
                        <button class="js-modal-btn video-promo" data-video-id="" autoplay>
                            <div class="w-100 position-relative">
                                <img src="img/bg/video-promo.jpg" alt="" class="rounded">
                                <i class="icofont-video-alt"></i>
                            </div>
                        </button>
                        <h6 class="text-white">Kurban</h6>
                    </div>
                    <div class="col-sm-4 text-center">
                        <button class="js-modal-btn video-promo" data-video-id="" autoplay>
                            <div class="w-100 position-relative">
                                <img src="img/bg/video-promo.jpg" alt="" class="rounded">
                                <i class="icofont-video-alt"></i>
                            </div>
                        </button>
                        <h6 class="text-white">Jumber</h6>
                    </div>
                    <div class="col-sm-4 text-center">
                        <button class="js-modal-btn video-promo" data-video-id="" autoplay>
                            <div class="w-100 position-relative">
                                <img src="img/bg/video-promo.jpg" alt="" class="rounded">
                                <i class="icofont-video-alt"></i>
                            </div>
                        </button>
                        <h6 class="text-white">Ambulan</h6>
                    </div>
                </div>

            </div>
        </section>
        <!-- Video Section End -->

        <!-- ========== Program Unggulan Start ========== -->
        <section id="programs" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Program Unggulan</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dolorum! Lorem ipsum dolor sit
                                amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process-wrap">
                <div class="container">
                    <div class="row">
                        @php

                            $dataProgram = [
                                [
                                    'icon' => 'icofont-search-2',
                                    'name' => "Jum'at Berkah",
                                ],
                                [
                                    'icon' => 'icofont-holding-hands',
                                    'name' => 'Sembako',
                                ],
                                [
                                    'icon' => 'icofont-slidshare',
                                    'name' => 'Ambulan',
                                ],
                                [
                                    'icon' => 'icofont-simple-smile',
                                    'name' => 'Khitan Gratis',
                                ],
                                [
                                    'icon' => 'icofont-simple-smile',
                                    'name' => 'Sosial Dakwah',
                                ],
                                [
                                    'icon' => 'icofont-simple-smile',
                                    'name' => 'Rumah Tahfidz',
                                ],
                            ];

                        @endphp

                        @foreach ($dataProgram as $i => $row)
                            <!-- Single process item start -->
                            <div
                                class="process-item text-center col-md-{{ count($dataProgram) > 4 ? 2 : 3 }} col-sm-6 sm-m-15px-tb">
                                <div class="process-circle">
                                    <p>{{ $i + 1 }}</p>
                                </div>
                                <div class="icon-outer">
                                    <i class="{{ $row['icon'] }}"></i>
                                </div>
                                <h4 class="m-35px-t sm-m-15px-t">{{ $row['name'] }}</h4>
                            </div>
                            <!-- Single process item end -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Program Unggulan End ========== -->

        {{-- <!-- ========== JUMBER Start ========== -->
        <section id="jumber" class="p-80px-tb bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>JUM'AT BERKAH</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except. My
                                giving do summer of though narrow marked at.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container causes-swiper p-60px-b">
                        <div class="swiper-wrapper">
                            @php
                                $data = [
                                    [
                                        'bg' => 'img/causes/1.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/2.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for education',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/3.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/4.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                ];

                            @endphp

                            @foreach ($data as $row)
                                @include('page.home._slider', ['section' => 'donation', 'data' => $row])
                            @endforeach

                        </div>
                        <!-- Slider Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== JUMBER End ========== -->

        <!-- ========== Causes Start ========== -->
        <section id="causes" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Our recent causes</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except. My
                                giving do summer of though narrow marked at.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container causes-swiper p-60px-b">
                        <div class="swiper-wrapper">
                            @php
                                $data = [
                                    [
                                        'bg' => 'img/causes/1.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/2.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for education',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/3.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                    [
                                        'bg' => 'img/causes/4.jpg',
                                        'videoId' => 'QIYcFth8ty4',
                                        'linkBlog' => 'donate.html',
                                        'progres' => 30,
                                        'raised' => 1.299,
                                        'goals' => 12.0,
                                        'donated' => 14,
                                        'timeLeft' => 222,
                                        'title' => 'Donate for helpless',
                                        'subject' => 'Much evil soon high in hope do view. Out may few northward.',
                                    ],
                                ];

                            @endphp

                            @foreach ($data as $row)
                                @include('page.home._slider', ['section' => 'donation', 'data' => $row])
                            @endforeach

                        </div>
                        <!-- Slider Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== Causes End ========== --> --}}

        <!-- Our gallery Start-->
        <section id="gallery" class="p-80px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Our gallery</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Savings her pleased are several started females met. Short her not among being any. Thing of
                                judge
                                fruit charm views do.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="gallery-filter text-center">
                            <li><a class="btn btn-default btn-small active" href="#" data-filter="*">All</a></li>
                            <li><a class="btn btn-default btn-small" href="#" data-filter=".kurban">Kurban</a>
                            </li>
                            <li><a class="btn btn-default btn-small" href="#" data-filter=".jumber">Jumber</a>
                            </li>
                            <li><a class="btn btn-default btn-small" href="#" data-filter=".sembako">Sembako</a></li>
                            <li><a class="btn btn-default btn-small" href="#" data-filter=".event">Event</a></li>
                        </ul>
                        <!--/#gallery-filter-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

                        <div class="gallery-boxes">

                            @php
                                $dataGalery = [
                                    [
                                        'type' => 'kurban',
                                        'image' => 'img/hero/kurban.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                    [
                                        'type' => 'jumber',
                                        'image' => 'img/hero/camping.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                    [
                                        'type' => 'jumber',
                                        'image' => 'img/gallery/1.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                    [
                                        'type' => 'sembako',
                                        'image' => 'img/gallery/2.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                    [
                                        'type' => 'sembako',
                                        'image' => 'img/gallery/3.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                    [
                                        'type' => 'event',
                                        'image' => 'img/gallery/4.jpg',
                                        'title' => 'Galerry',
                                        'subject' =>
                                            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, hic neque blanditiis iusto debitis',
                                    ],
                                ];
                            @endphp

                            @foreach ($dataGalery as $row)
                                <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box {{ $row['type'] }}">
                                    <div class="inner gray-bg text-center h-100">
                                        <div class="box-hover ">
                                            <img src="{{ $row['image'] }}" alt="{{ $row['title'] }}"class="img-responsive">
                                            <div class="mask">
                                                <div class="mask-inner">
                                                    <h3 class="title">{{ $row['title'] }}</h3>
                                                    <p class="pera-text">{{ $row['subject'] }}</p>
                                                    <ul class="nav light-icon gallery-icon">
                                                        <li><a href="{{ $row['image'] }}" class="gallery-lightbox"
                                                                title="Porject name"><i class="icofont-image"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: .inner -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our gallery End-->
        <!-- Donor lists Start -->
        <section id="donors" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Donatur</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum esse excepturi,
                                numquam ratione maxime.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-12 p-25px-r sm-p-15px-r">
                        <div class="m-30px-b">
                            <h2>Top donors</h2>
                            <div class="divider-dashed m-25px-b"></div>
                            <p class="m-0px-b">Way nor furnished sir procuring therefore but. Warmth far manner myself
                                active are
                                cannot called.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="donor-box m-20px-b">
                                    <img src="img/donors/1.jpg" alt="">
                                    <a href="#">Cristin G.</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box m-20px-b">
                                    <img src="img/donors/2.jpg" alt="">
                                    <a href="#">Michele H.</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box m-20px-b">
                                    <img src="img/donors/3.jpg" alt="">
                                    <a href="#">John deo</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box m-20px-b">
                                    <img src="img/donors/4.jpg" alt="">
                                    <a href="#">Sara deo</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-12 p-25px-l sm-p-15px-l sm-m-25px-t">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/1.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/2.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/3.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/4.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/1.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/3.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 p-25px-l sm-p-15px-l sm-m-25px-t">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/1.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/2.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/3.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/4.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/1.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                                    <img src="img/donors/3.png" alt="">
                                    <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Donor lists End -->
        <!-- Sertifikasi Start -->
        <section id="sertifikasi" class="p-80px-tb bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Sertifikasi</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent
                                carried
                                she get see sitting.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container testimonialSwiper p-50px-b">
                        <div class="swiper-wrapper">
                            @php
                                $dataSertifikasi = [
                                    [
                                        'image' => 'img/500x500.jpg',
                                        'name' => 'Sertifikasi Baznas',
                                        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eum ut
                                                nobis est, magni vero natus quam, ratione blanditiis ea similique temporibus
                                                repudiandae deleniti aspernatur maiores! Dolore voluptate aliquid
                                                architecto.',
                                    ],
                                    [
                                        'image' => 'img/500x500.jpg',
                                        'name' => 'Akta Yayasan',
                                        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eum ut
                                                nobis est, magni vero natus quam, ratione blanditiis ea similique temporibus
                                                repudiandae deleniti aspernatur maiores! Dolore voluptate aliquid
                                                architecto.',
                                    ],
                                ];
                            @endphp
                            @foreach ($dataSertifikasi as $row)
                                <div class="swiper-slide">
                                    <div class="row single-testimonial">
                                        <div class="col-sm-12 col-md-5 col-lg-3 align-self-center">
                                            <img class="img-thumbnail" src="{{ $row['image'] }}" alt="">
                                        </div>
                                        <div class="col-sm-12 col-md-7 col-lg-9 align-self-center">
                                            <div class="p-30px testimonial-content bg-white">
                                                <h3>{{ $row['name'] }}</h3>
                                                <blockquote>{{ $row['text'] }}</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sertifikasi End -->

        <!-- Pengurus Start -->
        <section id="pengurus" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Our volunteers</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Perhaps far exposed age effects. Now distrusts you her delivered applauded affection out
                                sincerity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container volunteers-swiper p-60px-b">
                        <div class="swiper-wrapper">

                            @php
                                $dataPengurus = [
                                    [
                                        'image' => 'img/400x600.png',
                                        'name' => 'Edi Santoso',
                                        'jabatan' => 'Ketua',
                                        'wa' => 'https://wa.me/',
                                        'ig' => 'https://www.instagram.com/asm_bali/',
                                    ],
                                    [
                                        'image' => 'img/400x600.png',
                                        'name' => 'Nabil',
                                        'jabatan' => 'Sekretaris',
                                        'wa' => 'https://wa.me/',
                                        'ig' => 'https://www.instagram.com/asm_bali/',
                                    ],
                                    [
                                        'image' => 'img/400x600.png',
                                        'name' => 'Novrizal',
                                        'jabatan' => 'Bendahara',
                                        'wa' => 'https://wa.me/',
                                        'ig' => 'https://www.instagram.com/asm_bali/',
                                    ],
                                    [
                                        'image' => 'img/400x600.png',
                                        'name' => 'Agung Rama Satria',
                                        'jabatan' => 'PJ',
                                        'wa' => 'https://wa.me/',
                                        'ig' => 'https://www.instagram.com/asm_bali/',
                                    ],
                                    [
                                        'image' => 'img/400x600.png',
                                        'name' => 'Agung Rama Satria',
                                        'jabatan' => 'PJ',
                                        'wa' => 'https://wa.me/',
                                        'ig' => 'https://www.instagram.com/asm_bali/',
                                    ],
                                ];
                            @endphp

                            @foreach ($dataPengurus as $row)
                                <div class="swiper-slide">
                                    <div class="col">
                                        <div class="each-box">
                                            <div class="inner gray-bg text-center">
                                                <div class="box-hover">
                                                    <img src="{{ $row['image'] }}" alt="Children"
                                                        class="img-responsive">
                                                    <div class="mask">
                                                        <div class="mask-inner">
                                                            <h3 class="title">{{ $row['name'] }}</h3>
                                                            <p class="pera-text">{{ $row['jabatan'] }}</p>
                                                            <ul class="nav light-icon vol-social-icon">
                                                                <li>
                                                                    <a href="{{ $row['wa'] }}">
                                                                        <i class="icofont-whatsapp"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ $row['ig'] }}">
                                                                        <i class="icofont-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End: .inner -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pengurus End -->

        <!-- Join TPQ Start-->
        <section id="joinTPQ" class="p-80px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 sm-m-35px-b">
                        <h2>Join Rumah Tahfidz ASM</h2>
                        <div class="divider-dashed m-25px-b"></div>
                        <p class="m-25px-b">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem minima nemo
                            earum vitae aliquam nobis harum explicabo iusto amet. Placeat accusamus commodi obcaecati
                            accusantium doloremque esse temporibus modi, fuga libero?</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="asset-box">
                                    <i class="icofont-holding-hands"></i>
                                    <p><span class="counter">147</span> Volenteers</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="asset-box">
                                    <i class="icofont-check-circled"></i>
                                    <p><span class="counter">2000</span> Causes done</p>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-default" href="#">Join now</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="img/hero/kurban.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Join TPQ End-->

        <!-- Start Blog Section -->
        {{-- <section id="blog" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Latest Articles</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>With my them if up many. Lain week nay she them her she. Extremity so attending objection as
                                engrossed gentleman something.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single blog -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                        <div class="single-blog-wrap">
                            <div class="single-blog">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="post-content">
                                    <p>By so delight of showing neither believe he present. Deal sigh up in shew away when.
                                        Pursuit
                                        express no or prepare replied. Wholly formed old latter future but way she.</p>
                                    <a href="single-blog.html">Read more</a>
                                </div>
                                <div class="post-info">
                                    <ul>
                                        <li><b>Posted by:</b> Sofia J.</li>
                                        <li><b>On:</b> Calibration</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-header">
                                <a class="date" href="#">
                                    <span class="day">09</span>
                                    <span class="month">Sep</span>
                                </a>
                                <h3><a href="single-blog.html">10 years of clelbration for helping peoples</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->
                    <!-- Start Single blog -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                        <div class="single-blog-wrap">
                            <div class="single-blog">
                                <img src="img/blog/2.jpg" alt="">
                                <div class="post-content">
                                    <p>Am if number no up period regard sudden better. Decisively surrounded all admiration
                                        and not
                                        you. Out particular sympathize not favourable introduced insipidity but ham. Rather
                                        number
                                        can and set praise.</p>
                                    <a href="single-blog.html">Read more</a>
                                </div>
                                <div class="post-info">
                                    <ul>
                                        <li><b>Posted by:</b> Sofia J.</li>
                                        <li><b>On:</b> Calibration</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-header">
                                <a class="date" href="#">
                                    <span class="day">09</span>
                                    <span class="month">Oct</span>
                                </a>
                                <h3><a href="single-blog.html">Childrens in Central Africa spending sad life</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->
                    <!-- Start Single blog -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                        <div class="single-blog-wrap">
                            <div class="single-blog">
                                <img src="img/blog/3.jpg" alt="">
                                <div class="post-content">
                                    <p>Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire
                                        wisdom.
                                        Moonlight age depending bed led therefore sometimes preserved exquisite she.</p>
                                    <a href="single-blog.html">Read more</a>
                                </div>
                                <div class="post-info">
                                    <ul>
                                        <li><b>Posted by:</b> Sofia J.</li>
                                        <li><b>On:</b> Calibration</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-header">
                                <a class="date" href="#">
                                    <span class="day">01</span>
                                    <span class="month">Nov</span>
                                </a>
                                <h3><a href="single-blog.html">Sometimes cutest girls are also helpless</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->
                </div>
            </div>
        </section> --}}
        <!-- End Blog Section -->

        <!-- Start contact section  -->
        <section id="contact" class="p-80px-tb bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center m-60px-b">
                            <h2>Get in touch</h2>
                            <div class="divider-circle mx-auto"></div>
                            <p>Folly was these three and songs arose whose. Of in vicinity contempt together in possible
                                branched.
                                Assured company hastily looking garrets in oh.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 m-25px-b">
                        <div class="contact-form-box bg-light w-100 rounded" id="map" style="height: 450px;">
                        </div>
                    </div>
                    <!-- End contact form area-->
                    <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b">
                        <div class="address-wrap bg-white p-30px rounded">
                            <ul>
                                <li><span>Address:</span>Jl. Gn. Talang VI No.B-1, Padangsambian<br> Denpasar Barat</li>
                                <li><span>Phone:</span><a href="#">+62</a></li>
                                <li><span>Email:</span><a href="#">-</a></li>
                            </ul>
                            <h4>Connect our socials</h4>
                            <ul class="nav light-icon social-icons">
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End contact section -->
    @endsection

    @push('style')
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <style>
            .video-promo i {
                top: 50%;
                left: 50%;
                position: absolute;
                font-size: 2rem;
                transition: color 0.3s, border 0.3s, transform 0.3s;
                color: white;

                transform: translate(-50%, -50%);
            }

            .video-promo i:hover {
                color: red;
                /* Mengubah warna ikon menjadi merah */
                transform: translate(-50%, -50%) scale(2);
                /* Memperbesar ikon */
            }

            .video-promo img {
                transition: color 0.3s, border 0.3s, transform 0.3s;
            }

            .video-promo img:hover {
                transform: scale(1.3);
            }

            .gallery-item {
                width: 200px;
                padding: 5px;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            var map;

            function initMap() {
                // Coordinates for ASM Bali
                var location = {
                    lat: -8.6723405,
                    lng: 115.1873575
                };

                // Initialize the map
                map = new google.maps.Map(document.getElementById('map'), {
                    center: location,
                    zoom: 19 // Adjust the zoom level as needed
                });

                // Add a marker at the location
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'ASM Bali'
                });
            }
        </script>
        <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer>
        </script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script>
            AOS.init();
        </script>
    @endpush
</x-default-layout>
