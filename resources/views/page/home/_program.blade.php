<section id="program" class="p-80px-tb bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="section-title text-center m-60px-b">
                    <h2>Program Kegiatan</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dolorum! Lorem ipsum dolor sit
                        amet.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="process-wrap">
        <div class="container">
            <div class="row">
                @foreach ($dataProgram as $i => $row)
                    <!-- Single process item start -->
                    <div
                        class="process-item text-center col-md-{{ count($dataProgram) > 4 ? 2 : 3 }} col-sm-6 sm-m-15px-tb">
                        {{-- <a href="{{ route('') }}"> --}}
                        <a href="{{ url($row['redirect']) }}" wire:navigate>
                            <div class="process-circle">
                                <p>{{ $i + 1 }}</p>
                            </div>
                            <div class="icon-outer">
                                <i class="{{ $row['icon'] }}"></i>
                            </div>
                            <h4 class="m-35px-t sm-m-15px-t">{{ $row['name'] }}</h4>
                        </a>
                    </div>
                    <!-- Single process item end -->
                @endforeach
            </div>
        </div>
    </div>
</section>


@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
