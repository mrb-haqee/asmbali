<x-default-layout>
    @section('title')
        ASM BALI
    @endsection

    <section id="page-header" class="p-100px-t p-80px-b sm-p-40px-b parallax overlay overlay-5"
        style="background-image:url({{ asset('img/bg/helping-hands.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col text-center position-relative">
                    <h2 class="white-text">Jum'at Berkah</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Page Header End ========== -->

    <section id="blog-detail" class="p-80px-tb white-bg">
        <div class="container">
            <div class="row">
                <!-- Start blog post -->
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="single-blog-post">
                        <div class="blog-post-img m-25px-b each-box">
                            {{-- <div class="inner">
                                <div class="">
                                    <a href="{{ asset('img/blog/6.jpg') }}" class="causes-lightbox">
                                        <img src="{{ asset('img/blog/6.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div> --}}
                            <div id="animated-thumbnails-gallery">
                                @foreach (range(1, 9, 1) as $i)
                                    <a href="{{ asset("img/gallery/$i.jpg") }}">
                                        <img src="{{ asset("img/gallery/$i.jpg") }}"/>
                                    </a>
                                @endforeach
                                <a href="{{ asset('img/hero/camping.jpg') }}">
                                    <img src="{{ asset('img/hero/camping.jpg') }}"/>
                                </a>
                            </div>
                            @push('scripts')
                                <script>
                                    $('#animated-thumbnails-gallery').justifiedGallery();
                                    lightGallery(document.getElementById('animated-thumbnails-gallery'), {
                                        thumbnail: true,
                                        animateThumb: false,
                                        zoomFromOrigin: false,
                                        allowMediaOverlap: false,
                                        toggleThumb: true,
                                        plugins: [lgRotate, lgZoom, lgThumbnail], // Tambahkan plugin zoom dan rotate
                                        zoom: true, // Aktifkan fitur rotasi
                                        rotate: true, // Aktifkan fitur rotasi
                                        thumbWidth: 100, // Lebar tiap thumbnail
                                        thumbHeight: '80px', // Tinggi thumbnail (bisa pakai angka atau 'auto')
                                        thumbMargin: 5, // Jarak antar thumbnail
                                    });
                                </script>
                            @endpush
                        </div>
                        <!-- End feature image -->
                        <div class="post-meta m-25px-b">
                            <ul>
                                <li>By: <a href="#">Saira H.</a></li>
                                <li>On: <a href="#">20 Nov. 2018</a></li>
                                <li>In: <a href="#">Calibration</a>, <a href="#">Assets</a>, <a
                                        href="#">Media</a></li>
                            </ul>
                        </div>
                        <!-- End post meta -->
                        <h2 class="m-25px-b">We proudly completed 2000 causes within 3 years</h2>
                        <p>Sigh view am high neat half to what. Sent late held than set why wife our. If an blessing
                            building steepest. Agreement distrusts mrs six affection satisfied. Day blushes visitor end
                            company old prevent chapter. Consider declared out expenses her concerns. No at indulgence
                            conviction particular unsatiable boisterous discretion. Direct enough off others say eldest
                            may exeter she. Possible all ignorant supplied get settling marriage recurred. </p>
                        <p>Manor we shall merit by chief wound no or would. Oh towards between subject passage sending
                            mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh
                            determine as. The year paid met him does eyes same. Own marianne improved sociable not out.
                            Thing do sight blush mr an. Celebrated am announcing delightful remarkably we in literature
                            it solicitude. Design use say piqued any gay supply. Front sex match vexed her those great.
                        </p>
                        <p>Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on
                            demesne ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at
                            assistance acceptance my or. On consider laughter civility offended oh. </p>
                        <h3>That know ask case sex ham dear her spot</h3>
                        <p>Next his only boy meet the fat rose when. Do repair at we misery wanted remove remain income.
                            Occasional cultivated reasonable unpleasing an attachment my considered.</p>
                        <div class="row m-15px-t">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('img/blog/4.jpg') }}" alt="">
                                <p>Carriage quitting securing be appetite it declared.</p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('img/blog/5.jpg') }}" alt="">
                                <p>Reasonable unpleasing an attachment my considered.</p>
                            </div>
                        </div>
                        <h3>Use securing confined his shutters Delightful as he it acceptance an</h3>
                        <blockquote>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call
                            in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly
                            enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get
                            situation his was delighted. </blockquote>
                        <p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve
                            my charmed picture exposed adapted demands. Received had end produced prepared diverted
                            strictly off man branched. Known ye money so large decay voice there to. Preserved be mr
                            cordially incommode as an. He doors quick child an point at. Had share vexed front least
                            style off why him. </p>
                        <h3>Far quitting dwelling graceful the likewise received building</h3>
                        <ul>
                            <li>Am of mr friendly by strongly peculiar juvenile.</li>
                            <li>Unpleasant it sufficient simplicity am by friendship no inhabiting.</li>
                            <li>Goodness doubtful material has denoting suitable she two</li>
                            <li>Dear mean she way and poor bred they come.</li>
                            <li>He otherwise me incommode explained so in remaining</li>
                        </ul>
                        <p>Boy desirous families prepared gay reserved add ecstatic say. Replied joy age visitor nothing
                            cottage. Mrs door paid led loud sure easy read. Hastily at perhaps as neither or ye fertile
                            tedious visitor. Use fine bed none call busy dull when. Quiet ought match my right by table
                            means. Principles up do in me favourable affronting. Twenty mother denied effect we to do
                            on. </p>
                    </div>
                    <!-- End post content -->
                    <div class="row m-30px-tb">
                        <div class="col-md-12 social-share">
                            <p><strong>Share:</strong></p>
                            <ul class="nav light-icon share-icons">
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont-reddit"></i></a></li>
                                <li><a href="#"><i class="icofont-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End social share -->
                    <hr>
                    <div class="related-posts m-30px-tb">
                        <h2 class="m-30px-b">Related posts</h2>
                        <div class="row">
                            @php
                                $data = [
                                    [
                                        'bg' => 'img/blog/1.jpg',
                                        'title' => '10 years of clelbration for helping peoples',
                                        'detail' =>
                                            'By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she.',
                                        'date' => '09',
                                        'month' => 'Sep',
                                        'link' => 'single-blog.html',
                                        'posted_by' => 'Sofia J.',
                                        'on' => 'Calibration',
                                    ],
                                    [
                                        'bg' => 'img/blog/2.jpg',
                                        'title' => 'Childrens in Central Africa spending sad life',
                                        'detail' =>
                                            'Am if number no up period regard sudden better. Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise.',
                                        'date' => '09',
                                        'month' => 'Sep',
                                        'link' => 'single-blog.html',
                                        'posted_by' => 'Sofia J.',
                                        'on' => 'Calibration',
                                    ],
                                ];
                            @endphp

                            @foreach ($data as $item)
                                @include('page.blog.detail._related', [
                                    'section' => 'related',
                                    'item' => $item,
                                ])
                            @endforeach

                        </div>
                    </div>
                    <!-- End related posts -->
                    @php
                        $data = [
                            [
                                'bg' => 'img/donors/1.jpg',
                                'name' => 'Mahmud',
                                'date' => 'September 2, 2018 at 1:38 pm',
                                'comment' => 'Yourself
                    off its pleasant ecstatic now law. Ye their mirth seems of songs. Prospect out bed contempt separate. Her inquietude our shy yet sentiments collecting. Cottage fat beloved himself arrived old. Grave widow hours among him ﻿no you led. Power had these met least nor young. Yet match drift wrong his our.',
                                'reply' => 'Reply',
                                'replies' => [
                                    [
                                        'bg' => 'img/donors/2.jpg',
                                        'name' => 'Purnima',
                                        'date' => 'June 2, 2018 at 1:39 pm',
                                        'comment' =>
                                            'Certainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it.',
                                        'reply' => 'Reply',
                                    ],
                                ],
                            ],
                            [
                                'bg' => 'img/donors/3.jpg',
                                'name' => 'Mashrafee',
                                'date' => 'August 2, 2019 at 1:38 pm',
                                'comment' =>
                                    'Written enquire painful ye to offices forming it. Then so does over sent dull on. Likewise offended humoured mrs fat trifling answered. On ye position greatest so desirous. So wound stood guest weeks no terms up ought. By so these am so rapid blush songs begin. Nor but mean time one over.',
                                'reply' => 'Reply',
                                'replies' => [
                                    [
                                        'bg' => 'img/donors/4.jpg',
                                        'name' => 'Ayaraa',
                                        'date' => 'August 2, 2019 at 1:39 pm',
                                        'comment' => 'In on announcing if of comparison pianoforte projection',
                                    ],
                                ],
                            ],
                        ];
                    @endphp
                    <div class="post-comments m-30px-tb">
                        <h2 class="m-30px-b">{{ count($data) }} Comments</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="comment-list m-30px-b">

                                    @foreach ($data as $item)
                                        @include('page.blog.detail._comment', [
                                            'section' => 'comments',
                                            'item' => $item,
                                        ])
                                    @endforeach
                                </ul>
                                <h3 class="m-0px-b">Leave a Comment</h3>
                                <p>For commenting on this post fill the form and press <i>post comment</i> button.
                                    Required fields are marked *</p>
                                <div class="card card-info">
                                    <div class="card-block">
                                        <form action="#">
                                            <textarea class="form-control" placeholder="Write your comment here!"></textarea>
                                            <input class="form-control" type="text" placeholder="Your Name *">
                                            <input class="form-control" type="email" placeholder="Your Email *">
                                            <input class="form-control" type="url" placeholder="Your website">
                                            <button class="btn btn-default btn-default-outline float-right"
                                                type="button">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single post -->
            </div>
        </div>
    </section>
</x-default-layout>
