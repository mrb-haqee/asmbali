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
