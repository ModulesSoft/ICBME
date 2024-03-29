@extends('layouts.main')
<section id="supporters" class="section-with-bg">

  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.sponsors.title')}}</h2>
      <p>{{__('messages.sponsors.subtitle')}}</p>
    </div>

    <div class="row no-gutters clearfix">
      @foreach($sponsors as $sponsor)
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="supporter-logo">
          <a href="{{$sponsor->link}}" target="_blank">
            <img src="{{ $sponsor->logo->getUrl() }}" class="img-fluid" alt="{{ $sponsor->name }}">
          </a>
        </div class="text-justify">
        <p class="text-center">
          <a href="{{$sponsor->link}}" target="_blank">
            {{$sponsor->name}}
          </a>
        </p>
      </div>
      @endforeach
    </div>

  </div>

</section>