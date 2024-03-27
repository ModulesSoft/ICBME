@extends('layouts.main')
<section id="news">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h2>{{__('messages.poster.title')}}</h2>
            <p>{{__('messages.poster.subtitle')}}</p>
        </div>
        <div class="row">
            <div class="col-12 poster">
                <img src="{{ $image }}" alt="poster" />
            </div>
        </div>
    </div>
</section>
