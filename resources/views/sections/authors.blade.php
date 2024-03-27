@extends('layouts.main')
<section id="authors" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.authors.title')}}</h2>
      <p>{{__('messages.authors.subtitle')}}</p>
    </div>

    <div class="row">
      @foreach($authors as $author)
        <div class="col-lg-6 col-md-6">
          <div class="author" style="text-align: initial">
            {{--<div class="author-img">--}}
              {{--<img src="{{ $author->photo->getUrl() }}" alt="{{ $author->name }}" class="img-fluid">--}}
            {{--</div>--}}
            <h3><a href="#">{{ $author->name }}</a></h3>
            {{--<div class="stars">--}}
              {{--@for($i = 0; $i < $author->rating; $i++)--}}
                {{--<i class="fa fa-star"></i>--}}
              {{--@endfor--}}
            {{--</div>--}}
            <p>{!! $author->description !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
