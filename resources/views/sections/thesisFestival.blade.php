@if(isset($settings['thesisfestival_description']))
<section id="thesis-festival" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>{{__('messages.thesisfestival.title')}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>{!! $settings['thesisfestival_description'] ?? '' !!}</p>
            </div>
        </div>
    </div>
</section>
@endif