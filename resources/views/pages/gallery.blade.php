@extends('layouts.main')
<section id="gallery" dir="ltr">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.gallery.title') }}</h2>
            <p>{{ __('messages.gallery.subtitle') }}</p>
        </div>

        @php
        $counter = 0;
        @endphp
        @foreach ($galleries as $gallery)
        <div class="row">
            <div class="col-6 col-md-12">
                <h4>{{ $gallery->name }}</h4>
                <div id="{{ $counter++ }}" class="owl-carousel gallery-carousel  mb-4">
                    @foreach ($gallery->photos as $photo)
                    <a href="{{ $photo->getUrl() }}" data-lightbox="gallery-carousel"><img src="{{ $photo->getUrl('medthumb') }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>