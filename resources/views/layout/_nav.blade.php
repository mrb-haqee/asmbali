<header>
    <nav class="navbar navbar-expand-lg header-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" class="d-flex">
                <img id="icon-asm" src="{{ asset('img/logos/asm-text.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCodeply"
                aria-expanded="false" aria-controls="navbarCodeply" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
                <i class="icofont-ui-close"></i>
            </button>

            @if (request()->routeIs('home'))
                <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarCodeply">
                    <ul class="nav navbar-nav ml-auto">
                        <li><a class="nav-link" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#tentang">Tentang</a></li>
                        <li><a class="nav-link" href="#program">Program</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link" href="#donatur">Donatur</a></li>
                        <li><a class="nav-link" href="#pengurus">Pengurus</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="{{ route('blog.index') }}" wire:navigate>Blog</a></li>
                    </ul>
                </div>
            @else
                <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarCodeply">
                    <ul class="nav navbar-nav ml-auto">
                        <li><a class="nav-link" href="{{ route('home') }}#home" wire:navigate>Home</a></li>
                        <li><a class="nav-link" href="{{ route('blog.index') }}" wire:navigate>Blog</a></li>
                    </ul>
                </div>
            @endif
        </div>
        </div>
    </nav>
</header>
