<section id="gallery" class="p-80px-tb">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="section-title text-center m-60px-b">
                    <h2>Galeri</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Savings her pleased are several started females met. Short her not among being any. Thing of
                        judge
                        fruit charm views do.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <ul class="gallery-filter text-center">
                    <li><a class="btn btn-default btn-small active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default btn-small" href="#" data-filter=".kurban">Kurban</a>
                    </li>
                    <li><a class="btn btn-default btn-small" href="#" data-filter=".jumber">Jumber</a>
                    </li>
                    <li><a class="btn btn-default btn-small" href="#" data-filter=".sembako">Sembako</a></li>
                    <li><a class="btn btn-default btn-small" href="#" data-filter=".event">Event</a></li>
                    <li>
                        <button class="btn btn-default btn-small" wire:navigate
                            onclick="window.location.href='{{ route('galeri') }}'">
                            <i class="fa fa-list"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="gallery-boxes">
                    @foreach ($dataGalery as $row)
                        <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box {{ $row['type'] }}">
                            <div class="inner gray-bg text-center h-100">
                                <div class="box-hover ">
                                    <img src="{{ $row['image'] }}" alt="{{ $row['title'] }}"class="img-responsive">
                                    <div class="mask">
                                        <div class="mask-inner">
                                            <h3 class="title">{{ $row['title'] }}</h3>
                                            <p class="pera-text">{{ $row['subject'] }}</p>
                                            <ul class="nav light-icon gallery-icon">
                                                <li><a href="{{ $row['image'] }}" class="gallery-lightbox"
                                                        title="Porject name"><i class="icofont-image"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .inner -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
