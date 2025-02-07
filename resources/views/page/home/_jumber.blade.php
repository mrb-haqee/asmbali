 <!-- ========== JUMBER Start ========== -->
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
 <!-- ========== Causes End ========== -->
