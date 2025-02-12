<x-system-layout>
    @section('title')
        Ongoing System
    @endsection

    @push('style')
        <style>
            .error-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f8f9fa;
            }

            .error-content {
                text-align: center;
            }

            .error-content h1 {
                font-size: 6rem;
                font-weight: bold;
                margin-bottom: 1rem;
            }

            .error-content p {
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }

            .lottie-animation {
                max-width: 400px;
                margin-bottom: 2rem;
            }

            #switch-style {
                display: none !important
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    @endpush

    <div class="error-container">
        <div class="lottie-animation"></div>
        <div class="error-content">
            <h1>503</h1>
            <h3>Sistem Sedang Dalam Perbaikan</h3>
            <p>Mohon maaf, sistem sedang diperbaiki. Silakan kembali lagi nanti.</p>
            <a href="{{ route('home') }}" class="btn text-white" style="background-color: #fc5f45" wire:navigate>Home</a>
        </div>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @push('scripts')
        <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
                const animation = lottie.loadAnimation({
                    container: document.querySelector('.lottie-animation'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'https://lottie.host/d987597c-7676-4424-8817-7fca6dc1a33e/BVrFXsaeui.json'
                });
            });
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @endpush


</x-system-layout>
