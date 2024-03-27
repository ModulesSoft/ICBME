<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">{!! $settings['title'] ?? '' !!}</h1>
    <p class="mb-4 pb-0">{{ $settings['subtitle'] ?? '' }}</p>
    {{--@if($settings['youtube_link'])--}}
    {{--<a href="{{ $settings['youtube_link'] }}" class="venobox play-btn mb-4" data-vbtype="video"--}}
    {{--data-autoplay="true"></a>--}}
    {{--@endif--}}
    <div id="countdown">
      <div class="cdlcontainer">
        {{--<h1>Countdown to the event:</h1>--}}
        <ul class="list">
          <li class="cdl"><span id="days"></span>{{__('messages.intro.countdown.days')}}</li>
          <li class="cdl"><span id="hours"></span>{{__('messages.intro.countdown.hours')}}</li>
          <li class="cdl"><span id="minutes"></span>{{__('messages.intro.countdown.minutes')}}</li>
          <li class="cdl"><span id="seconds"></span>{{__('messages.intro.countdown.seconds')}}</li>
        </ul>
      </div>
      <script>
        const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;

        let countDown = new Date("{{__('messages.intro.countdown.date')}}").getTime(),
          x = setInterval(function() {

            let now = new Date().getTime(),
              distance = countDown - now;

            document.getElementById('days').innerText = Math.floor(distance / (day)),
              document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
              document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
              document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
              clearInterval(x);
              // 'IT'S THE TIME!;
              document.getElementById('countdown').style.display = 'none';
            }

          }, second)
      </script>
    </div>
    <img style="width: 80%;border-radius: 5px" src="{{ $settings['banner'] }}" alt="banner">
    <a href="#about" class="about-btn scrollto">{{__('messages.intro.button')}}</a>
  </div>
</section>