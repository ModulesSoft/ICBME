@extends('layouts.main')
<section id="committees" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.workshops.title')}}</h2>
      <p>{{__('messages.workshops.subtitle')}}</p>
    </div>

    <div class="row">
      @foreach($workshops as $workshop)
        <div class="col-lg-12 col-md-12">
          <div class="hotel">
            {{--<div class="hotel-img">--}}
              {{--<img src="{{ $hotel->photo->getUrl() }}" alt="{{ $hotel->name }}" class="img-fluid">--}}
            {{--</div>--}}
            <h3><a href="#">{{ $workshop->name }}</a></h3>
            {{--<div class="stars">--}}
              {{--@for($i = 0; $i < $hotel->rating; $i++)--}}
                {{--<i class="fa fa-star"></i>--}}
              {{--@endfor--}}
            {{--</div>--}}
            <p>{!! $workshop->description !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
