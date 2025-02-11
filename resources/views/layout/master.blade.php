<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo_config')


    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" />
    <!---IcoFont Icon font-->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ filemtime(public_path('css/custom.css')) }}">
    <link rel="stylesheet" href="{{ asset('demo/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/orange.css') }}" id="color-switch">

    <!--end::Custom Javascript-->
    @stack('style')
    <!--end::Javascript-->
    @livewireStyles
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarCodeply" data-bs-offset="70">
    <div id="preloader-wrap">
        <div class="preloader"></div>
    </div>

    @yield('content')
    @yield('footer')

    <script data-navigate-once src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.textillate.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.lettering.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.fittext.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/modal-video.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/swiper.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/aos.js') }}"></script>
    <script data-navigate-once src="{{ asset('js/custom.js') }}?v={{ filemtime(public_path('js/custom.js')) }}"></script>
    @livewireScripts

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

</html>
