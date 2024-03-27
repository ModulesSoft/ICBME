<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>{{__('messages.about.title')}}</h2>
                <p>{!! $settings['about_description'] ?? '' !!}</p>
            </div>
            <div class="col-lg-3">
                <h3>{{__("messages.about.where")}}</h3>
                <p>{!! $settings['about_where'] ?? '' !!}</p>
            </div>
            <div class="col-lg-3">
                <h3>{{__("messages.about.when")}}</h3>
                <p>{!! $settings['about_when'] ?? '' !!}</p>
                <h3>{{__("messages.about.dates")}}</h3>
                <p>{!! $settings['about_dates'] ?? '' !!}</p>
            </div>
        </div>
    </div>
</section>
