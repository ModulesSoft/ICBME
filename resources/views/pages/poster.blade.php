@extends('layouts.main')
<section id="news">
    <div class="container">
        <div class="section-header">
            <h2>{{__('messages.poster.title')}}</h2>
            <p>{{__('messages.poster.subtitle')}}</p>
        </div>
        <div class="row">
            <div class="col-12 poster">
                <img src="{{ $image }}" alt="poster" style="max-width: 70%;" />
            </div>
        </div>
    </div>
</section>