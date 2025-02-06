<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeatelier.net/site-templates/prottasha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2025 06:15:31 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" />
    <!---IcoFont Icon font-->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/orange.css') }}" id="color-switch">
</head>

<body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">
    <div id="preloader-wrap">
        <div class="preloader"></div>
    </div>



    <!-- ========== Header Nav Start ========== -->
    @include('layout._nav')
    <!-- ========== Header Nav End ========== -->

    <!-- ========== Content Start ========== -->
    @yield('content')
    <!-- ========== Content End ========== -->

    <!-- ========== Header Footer Start ========== -->
    @include('layout._footer')
    <!-- ========== Header Footer End ========== -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Animated text -->
    <script src="{{ asset('js/jquery.textillate.js') }}"></script>
    <script src="{{ asset('js/jquery.lettering.js') }}"></script>
    <script src="{{ asset('js/jquery.fittext.js') }}"></script>
    <!-- Magnific Popup core JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Modal video Popup core JS -->
    <script src="{{ asset('js/modal-video.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- CounterUp JS -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Isotop JS -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- AjaxChimp js -->
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--end::Custom Javascript-->
    @stack('style')
    <!--end::Javascript-->


    <!--end::Custom Javascript-->
    @stack('scripts')
    <!--end::Javascript-->

    <!-- =========================================================
  STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
 ============================================================== -->
    <script type="text/javascript" src="{{ asset('demo/demo.js') }}"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles">
            <span class="icofont-ui-settings"></span>
        </a>
        <div class="switched-options">
            <div class="config-title">
                Colors :
            </div>
            <ul class="styles">
                <li>
                    <div class="green color" id="green"></div>
                </li>
                <li>
                    <div class="blue color" id="blue"></div>
                </li>
                <li>
                    <div class="orange color" id="orange"></div>
                </li>
                <li>
                    <div class="purple color" id="purple"></div>
                </li>
                <li>
                    <div class="pink color" id="pink"></div>
                </li>
                <li>
                    <div class="brown color" id="brown"></div>
                </li>
                <li>
                    <div class="light-green color" id="light-green"></div>
                </li>
                <li>
                    <div class="light-blue color" id="light-blue"></div>
                </li>
                <li>
                    <div class="light-orange color" id="light-orange"></div>
                </li>
                <li>
                    <div class="light-purple color" id="light-purple"></div>
                </li>
                <li>
                    <div class="olive color" id="olive"></div>
                </li>
                <li>
                    <div class="gold color" id="gold"></div>
                </li>
            </ul>
        </div>
    </div>
</body>

<!-- Mirrored from themeatelier.net/site-templates/prottasha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2025 06:15:55 GMT -->

</html>
