<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>{{__('messages.speaker.title')}}</h2>
      <p>{{__('messages.speaker.subtitle')}}</p>
    </div>

    <div class="row">
      @foreach($speakers as $speaker)
        <div class="col-lg-3 col-md-6">
          <div class="speaker">
            <a href="{{ route('speaker', $speaker->id) }}">
            <img src="{{ $speaker->photo ? $speaker->photo->getUrl('bigthumb') :'' }}" alt="{{ $speaker->name }}">
            <div class="details">
              <h3><a href="{{ route('speaker', $speaker->id) }}">{{ $speaker->name }}</a></h3>
              <p>{!! $speaker->description !!}</p>
              <div class="social">
                @if($speaker->twitter)
                  <a href="{{ $speaker->twitter }}"><img style="height: 20px;border-radius: 50%" src="{{asset('img/googlescholaricon.png')}}"></a>
                @endif
                @if($speaker->facebook)
                  <a href="{{ $speaker->facebook }}"><img style="height: 20px;border-radius: 50%" src="{{asset('img/researchgateicon.png')}}"></a>
                @endif
                @if($speaker->linkedin)
                  <a href="{{ $speaker->linkedin }}"><img style="height: 20px;border-radius: 50%" src="{{asset('img/pubmedicon.png')}}"></a>
                @endif
              </div>
            </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
