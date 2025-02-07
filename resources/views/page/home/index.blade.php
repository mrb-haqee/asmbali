<x-default-layout>
    @section('title')
        ASM BALI
    @endsection

    @section('content')
        <!-- ========== Home Start ========== -->
        @php
            $dataHome = [
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
    @endsection

    @push('style')
    @endpush

    @push('scripts')
        <script>
            // var map;

            // function initMap() {
            //     // Coordinates for ASM Bali
            //     var location = {
            //         lat: -8.6723405,
            //         lng: 115.1873575
            //     };

            //     // Initialize the map
            //     map = new google.maps.Map(document.getElementById('map'), {
            //         center: location,
            //         zoom: 19 // Adjust the zoom level as needed
            //     });

            //     // Add a marker at the location
            //     var marker = new google.maps.Marker({
            //         position: location,
            //         map: map,
            //         title: 'ASM Bali'
            //     });
            // }
        </script>
        {{-- <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer>
        </script> --}}
       
    @endpush
</x-default-layout>
