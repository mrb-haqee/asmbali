<header>
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
        <div class="container">
            <a class="navbar-brand" href="#" class="d-flex">
                <img id="icon-asm" src="{{ asset('img/logos/asm-text.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCodeply">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarCodeply">
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}#home" wire:navigate preserve-state>Home</a>
                        {{-- <a class="nav-link" href="{{ route('home') }}#home"
                            @if (!request()->routeIs('home'))  @endif>Home</a> --}}
                    </li>
                    <li><a class="nav-link" href="{{ route('home') }}#tentang" wire:navigate preserve-state>Tentang</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('home') }}#program" wire:navigate>Program</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#gallery" wire:navigate>Gallery</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#donatur" wire:navigate>Donatur</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#pengurus" wire:navigate>Pengurus</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}#contact" wire:navigate>Contact</a></li>
                    <li><a class="nav-link" href="{{ route('blog.index') }}" wire:navigate>Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
