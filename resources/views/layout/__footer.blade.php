    <!-- Footer Top Start -->
    <section id="footer-top" class="p-80px-tb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="single-widget col-md-7 col-sm-6">
                            <a class="widget-logo" href="#">
                                <!-- <img src="http://www.placehold.it/150x50" alt=""> -->
                                ASM BALI
                            </a>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse laboriosam praesentium
                                fugit optio aliquid repudiandae.</p>
                        </div>

                        <div class="single-widget col-md-5 col-sm-6">
                            <h3>TENTANG</h3>
                            <ul class="recent-post">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#tentang">Tentang</a></li>
                                <li><a href="#program">Program</a></li>
                                <li><a href="#layanan">Layanan</a></li>
                                <li><a href="{{ route('blog.index') }}" wire:navigate>Blog</a></li>
                                <li><a href="https://wa.me/6281353262890" target="_blank">Whatsapp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="single-widget col-md-6 col-sm-6">
                            <h3>FAQ</h3>
                            <ul class="recent-post">
                                <li><a href="#">Donasi</a></li>
                                <li><a href="#">Zakat</a></li>
                                <li><a href="#">Wakaf</a></li>
                                <li><a href="#">Kurban</a></li>
                            </ul>
                        </div>

                        <div class="single-widget col-md-6 col-sm-6">

                            <h3>IKUTI KAMI</h3>
                            <div class="address-wrap bg-white rounded">
                                <ul class="nav light-icon social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/ajangsilaturahimmuslimbali/" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/asm_bali/" target="_blank">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@ASMBali" target="_blank">
                                            <i class="icofont-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="single-widget col-md-6 col-sm-6">
                            <h3>IKUTI KAMI</h3>
                            <ul class="photo-gallery">
                                <li>
                                    <a href="#"><img src="img/gallery/1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/gallery/9.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Top End -->
    <!-- Start footer -->
    <footer id="footer" class="p-30px-tb bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="copyright-text">
                        Copyright &copy; <a href="{{ route('home') }}">ASM BALI</a> {{ date('Y') }}
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- START FIXED BUTTON WA -->
    <a id="button-hotline" href="https://wa.me/6281353262890" target="_blank" data-aos="fade-down">
        <div class="d-flex align-items-center justify-content-center p-lg-3 p-2 shadow-sm bg-white">
            <img src="{{ asset('img/logos/wa.png') }}" alt="WhatsApp">
            <p class="mb-0 text-center ms-2">Ada yang bisa kami bantu?</p>
        </div>
    </a>
    <!-- END FIXED BUTTON WA -->
