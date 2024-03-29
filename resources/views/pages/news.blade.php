@extends('layouts.main')
<section id="news">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.news.title') }}</h2>
            <p>{{ __('messages.news.subtitle') }}</p>
        </div>
        @foreach ($news as $new)
        <div class="row  border-bottom m-4">
            <div class="col-12">
                <div class="well">
                    <div class="media">
                        <div class="media-body">
                            <div class="media-heading">
                                <h4><a href="{{ route('new', $new->id) }}">{{ $new->name }}</a></h4>
                                <span class="text-right text-warning">
                                    @php
                                    $dt = new Carbon\Carbon($new->created_at);
                                    @endphp
                                    <time datetime="{{$dt}}">
                                        @if(__('global.dir') === 'rtl')
                                        {{\Morilog\Jalali\Jalalian::fromDateTime($new->created_at)->format('%B %d، %Y')}}
                                        @else
                                        {{$dt->toFormattedDateString()}}
                                        @endif
                                    </time>
                                </span>
                            </div>
                            <p>
                                {!! \Illuminate\Support\Str::limit(strip_tags($new->description), 100, $end = '...') !!}
                            </p>
                        </div>
                    </div>
                    <a class="pull-left" href="{{ route('new', $new->id) }}">
                        @if ($new->photo)
                        <img src="{{ $new->photo->getUrl('medthumb') }}" alt="{{ $new->name }}" title="{{ $new->name }}" class="media-object" style="max-width:30vw;max-height:60vh;margin:0 10px;" />
                        @endif
                    </a>
                    <div class="pull-right">
                        <a class="btn button btn-outline-info mb-4" href="{{ route('new', $new->id) }}">{{__('global.read_more')}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>