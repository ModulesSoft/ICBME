@extends('layouts.main')

@section('content')
@include('sections.intro')
<main id="main">
  @include('sections.about')
  @include('sections.news')
  @include('sections.speakers')
  {{--@include('sections.schedule')--}}
  @include('sections.venues')
  @include('sections.hotels')
  @include('sections.thesisFestival')
  @include('sections.subscribe')
  @include('sections.faq')
  {{--@include('sections.contact')--}}


  {{--below in new pages--}}
  {{--@include('sections.committees')--}}
  {{--@include('sections.gallery')--}}
  {{--@include('sections.sponsors')--}}
  {{--@include('sections.authors')--}}
  {{--@include('sections.registration')--}}
</main>
@endsection