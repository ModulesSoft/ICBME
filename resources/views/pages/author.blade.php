@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
    <section id="speakers-details">
        <div class="container">
            <div class="section-header">
                <h2>{{ $author->name }}</h2>
                <p>last update: <time datetime="{{new Carbon\Carbon($author->updated_at)}}">{{(new Carbon\Carbon($author->updated_at))->toFormattedDateString()}}</time></p>
            </div>

            <div class="row">
                <div class="col-12">
                    @if($author->photo)
                    <div class="col-12">
                        <img src="{{ $author->photo->getUrl() }}" alt="{{ $author->name }}" class="img-fluid">
                    </div>
                    @endif
                </div>
                <div class="col-12 p-5" style="max-width: 100%!important;word-wrap: break-word;">
                    <div class="details">
                        <div>{!! $author->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection