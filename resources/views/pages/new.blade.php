@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
    <section id="speakers-details" class="wow fadeIn">
        <div class="container">
            <div class="section-header">
                <h2>{{ $new->name }}</h2>
                <p><time datetime="{{new Carbon\Carbon($new->created_at)}}">{{(new Carbon\Carbon($new->created_at))->toFormattedDateString()}}</time></p>
            </div>

            <div class="row">
                <div class="col-12">
                    @if($new->photo)
                    <div class="col-12">
                        <img src="{{ $new->photo->getUrl() }}" alt="{{ $new->name }}" class="img-fluid">
                    </div>
                    @endif
                </div>
                <div class="col-12" style="max-width: 100%!important;word-wrap: break-word;">
                    <div class="details">
                        <div>{!! $new->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection