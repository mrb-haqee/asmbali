@extends('layout.master')

@push('style')
    <style>
        #switch-style {
            display: block !important
        }
    </style>
@endpush

@section('seo_config')
    {!! Artesaos\SEOTools\Facades\SEOMeta::generate() !!}
    {!! Artesaos\SEOTools\Facades\OpenGraph::generate() !!}
    {!! Artesaos\SEOTools\Facades\TwitterCard::generate() !!}
@endsection

@include('layout.__nav')

@section('content')
    {{ $slot }}
@endsection

@section('footer')
    @include('layout.__footer')
@endsection
