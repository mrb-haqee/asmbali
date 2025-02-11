<x-default-layout>
    @section('title')
        ASM BALI
    @endsection

    <!-- ========== Home Start ========== -->
    @php
        $dataHome = [
            [
                'bg' => 'img/hero/homeless.jpg',
                'title' => 'Ajang Silaturahmi Muslim Bali',
                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
            ],
            [
                'bg' => 'img/hero/kurban.jpg',
                'title' => 'Ajang Silaturahmi Muslim Bali',
                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
            ],
            [
                'bg' => 'img/hero/tukik.jpg',
                'title' => 'Ajang Silaturahmi Muslim Bali',
                'detail' => 'Berbuat untuk Kemaslahatan Ummat',
            ],
        ];
    @endphp
    @include('page.home._home')
    <!-- ========== Home End ========== -->

    <!-- ========== Tentang Start ========== -->
    @include('page.home._tentang')
    <!-- ========== Tentang End ========== -->

    <!-- ========== Tentang Start ========== -->
    @include('page.home._video')
    <!-- ========== Tentang End ========== -->

    <!-- ========== Program Unggulan Start ========== -->
    @php

        $dataProgram = [
            [
                'icon' => 'icofont-food-basket',
                'name' => "Jum'at Berkah",
                'redirect' => 'jumber',
            ],
            [
                'icon' => 'icofont-holding-hands',
                'name' => 'Sembako',
                'redirect' => 'sembako',
            ],
            [
                'icon' => 'icofont-ambulance-cross',
                'name' => 'Ambulan',
                'redirect' => 'ambulan',
            ],
            [
                'icon' => 'icofont-operation-theater',
                'name' => 'Khitan Gratis',
                'redirect' => 'khitan',
            ],
            [
                'icon' => 'icofont-users-social',
                'name' => 'Sosial Dakwah',
                'redirect' => 'sosial-dakwah',
            ],
            [
                'icon' => 'icofont-read-book',
                'name' => 'Rumah Tahfidz',
                'redirect' => 'rumah-tahfidz',
            ],
        ];
    @endphp
    @include('page.home._program')
    <!-- ========== Program Unggulan End ========== -->

    <!-- ========== galerry Start ========== -->
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
    @include('page.home._gallery')
    <!-- ========== galerry End ========== -->

    <!-- ========== donatur Start ========== -->
    @include('page.home._donatur')
    <!-- ========== donatur End ========== -->

    <!-- ========== sertifikasi Start ========== -->
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
    @include('page.home._sertifikasi')
    <!-- ========== sertifikasi End ========== -->

    <!-- ========== pengurus Start ========== -->
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
    @include('page.home._pengurus')
    <!-- ========== pengurus End ========== -->

    <!-- ========== tpq Start ========== -->
    @include('page.home._tpq')
    <!-- ========== tpq End ========== -->

    <!-- ========== contact Start ========== -->
    @include('page.home._contact')
    <!-- ========== contact End ========== -->

</x-default-layout>



<!-- Modal Portrait -->
<div class="modal fade modal-video" id="videoPortrait" tabindex="-1" role="dialog" aria-labelledby="videoPortraitLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 450px !important;">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="ratio" style="--bs-aspect-ratio: 178%;"> <!-- 3:4 Aspect Ratio -->
                    <iframe src="" id="iframePortrait" allowscriptaccess="always" allow="autoplay"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Landscape -->
<div class="modal fade modal-video" id="videoLandscape" tabindex="-1" role="dialog"
    aria-labelledby="videoLandscapeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="ratio ratio-16x9">
                    <iframe src="" id="iframeLandscape" allowscriptaccess="always" allow="autoplay"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
