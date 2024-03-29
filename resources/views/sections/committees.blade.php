@extends('layouts.main')
<section id="committees" class="section-with-bg wow fadeIn">

  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.committees.title')}}</h2>
      <p>{{__('messages.committees.subtitle')}}</p>
    </div>

    <div class="row">
      @foreach($committees as $committee)
      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <p>{!! $committee->description !!}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>