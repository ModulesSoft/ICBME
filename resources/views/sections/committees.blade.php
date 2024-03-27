@extends('layouts.main')
<section id="committees" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.committees.title')}}</h2>
      <p>{{__('messages.committees.subtitle')}}</p>
    </div>

    <div class="row">
      @foreach($committees as $committee)
        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            {{--<div class="hotel-img">--}}
              {{--<img src="{{ $hotel->photo->getUrl() }}" alt="{{ $hotel->name }}" class="img-fluid">--}}
            {{--</div>--}}
            <h3><a href="#">{{ $committee->name }}</a></h3>
            {{--<div class="stars">--}}
              {{--@for($i = 0; $i < $hotel->rating; $i++)--}}
                {{--<i class="fa fa-star"></i>--}}
              {{--@endfor--}}
            {{--</div>--}}
            <p>{!! $committee->description !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
