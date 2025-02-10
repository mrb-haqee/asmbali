<x-default-layout>
    @section('title')
        News Blog
    @endsection

    <section id="page-header" class="p-150px-t p-80px-b sm-p-100px-t sm-p-40px-b parallax overlay overlay-5"
        style="background-image:url({{ asset('img/bg/helping-hands.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col text-center text-white position-relative">
                    <h2 class="white-text">News Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Page Header End ========== -->

    <section id="blog-lists" class="p-80px-tb white-bg">
        <div class="container">
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
                        [
                            'bg' => 'img/blog/3.jpg',
                            'title' => 'Sometimes cutest girls are also helpless',
                            'detail' =>
                                'Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she.',
                            'date' => '09',
                            'month' => 'Sep',
                            'link' => 'single-blog.html',
                            'posted_by' => 'Sofia J.',
                            'on' => 'Calibration',
                        ],
                        [
                            'bg' => 'img/blog/4.jpg',
                            'title' => 'We proudly completed 2000 causes within 3 years',
                            'detail' =>
                                'Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she.',
                            'date' => '09',
                            'month' => 'Sep',
                            'link' => 'single-blog.html',
                            'posted_by' => 'Sofia J.',
                            'on' => 'Calibration',
                        ],
                        [
                            'bg' => 'img/blog/5.jpg',
                            'title' => '10 years of clelbration for helping peoples',
                            'detail' =>
                                'Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she.',
                            'date' => '09',
                            'month' => 'Sep',
                            'link' => 'single-blog.html',
                            'posted_by' => 'Sofia J.',
                            'on' => 'Calibration',
                        ],
                        [
                            'bg' => 'img/blog/6.jpg',
                            'title' => '10 years of clelbration for helping peoples',
                            'detail' =>
                                'Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she.',
                            'date' => '09',
                            'month' => 'Sep',
                            'link' => 'single-blog.html',
                            'posted_by' => 'Sofia J.',
                            'on' => 'Calibration',
                        ],
                    ];
                @endphp
                <!-- Start Single blog -->
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b">
                        <div class="single-blog-wrap">
                            <div class="single-blog">
                                <img src="{{ asset($item['bg']) }}" alt="">
                                <div class="post-content">
                                    <p>{{ $item['detail'] }}</p>
                                    <a href="{{ route('blog.show', ['blog' => $loop->index + 1]) }}">Read more</a>
                                </div>
                                <div class="post-info">
                                    <ul>
                                        <li><b>Posted by:</b> {{ $item['posted_by'] }}</li>
                                        <li><b>On:</b> {{ $item['on'] }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-header">
                                <a class="date" href="#">
                                    <span class="day">{{ $item['date'] }}</span>
                                    <span class="month">{{ $item['month'] }}</span>
                                </a>
                                <h3>
                                    <a href="{{ route('blog.show', ['blog' => $loop->index + 1]) }}">
                                        {{ $item['title'] }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single blog -->
            </div>
            <!-- Start pagenation -->
            <div class="row">
                <div class="col-12">
                    {{-- @include('pagination::bootstrap-5') --}}
                </div>
            </div>
            <!-- End pagenation -->
        </div>
    </section>
</x-default-layout>
