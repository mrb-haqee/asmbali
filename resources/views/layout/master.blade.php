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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/css/lightgallery-bundle.min.css"
        integrity="sha512-fXavT4uA4L0uTUFHC275D7zd751ohbSuD6VUMc5JysWfmR+NxTI3w7etE7N9hjTETcoh0w0V+24Cel4xXnqvCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css" />

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
    <script data-navigate-once src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/lightgallery.min.js"
        integrity="sha512-n82wdm8yNoOCDS7jsP6OEe12S0GHQV7jGSwj5V2tcNY/KM3z+oSDraUN3Hjf3EgOS9HWa4s3DmSSM2Z9anVVRQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script data-navigate-once src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/zoom/lg-zoom.min.js"
        integrity="sha512-/nVDv6BV2iCSxA44tgJLUgxmURDKfoUYdpLah0Hz8s3rpWBMHeiSzrr7bplsMBf+mF2L//RXX2q/SE6B0UhCRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script data-navigate-once
        src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/rotate/lg-rotate.min.js"
        integrity="sha512-zdFPYhvPSLe+Zi5zs8upUUPvlYUGzNIpcjwTHbb8pSGkqBe1JKIwoBM8Kqd8j3WvpmueUIY9YgNys5ZcZfOBoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/thumbnail/lg-thumbnail.min.js"
        integrity="sha512-JJ6kXdrz+7LlX78Nb0TttHqmOXaRmfmzrL1Z1W33cILbfhCK6/4IdDdi9COOfeggOWJTbqVoNiC/j9fLCJGLlw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>
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
