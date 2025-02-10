<header>
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
        <div class="container">
            <a class="navbar-brand" href="#" class="d-flex">
                <img id="icon-asm" src="{{ asset('img/logos/asm-text.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCodeply"
                aria-expanded="false" aria-controls="navbarCodeply" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
                <i class="icofont-ui-close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCodeply">
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}#home">Home</a>
                        {{-- <a class="nav-link" href="{{ route('home') }}#home"
                            @if (!request()->routeIs('home'))  @endif>Home</a> --}}
                    </li>
                    <li><a class="nav-link" href="{{ route('home') }}#tentang">Tentang</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('home') }}#program">Program</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#gallery">Gallery</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#donatur">Donatur</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#pengurus">Pengurus</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#contact">Contact</a></li>
                    <li><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
