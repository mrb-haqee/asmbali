<section id="pengurus" class="p-80px-tb bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="section-title text-center m-60px-b">
                    <h2>Pengurus Yayasan</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nesciunt.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-container volunteers-swiper p-60px-b">
                <div class="swiper-wrapper">

                    @foreach ($dataPengurus as $row)
                        <div class="swiper-slide">
                            <div class="col">
                                <div class="each-box">
                                    <div class="inner gray-bg text-center">
                                        <div class="box-hover">
                                            <img src="{{ $row['image'] }}" alt="Children" class="img-responsive">
                                            <div class="mask">
                                                <div class="mask-inner">
                                                    <h3 class="title">{{ $row['name'] }}</h3>
                                                    <p class="pera-text">{{ $row['jabatan'] }}</p>
                                                    <ul class="nav light-icon vol-social-icon">
                                                        <li>
                                                            <a href="{{ $row['wa'] }}" target="_blank">
                                                                <i class="icofont-whatsapp"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $row['ig'] }}" target="_blank">
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
