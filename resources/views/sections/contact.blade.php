<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>{{__('messages.contact.title')}}</h2>
      <p>{{__('messages.contact.subtitle')}}</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>{{__('messages.contact.address')}}</h3>
          <address>{{ $settings['contact_address'] }}</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>{{__('messages.contact.phone')}}</h3>
          <p><a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '') }}">{{ $settings['contact_phone'] ?? '' }}</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>{{__('messages.contact.email')}}</h3>
          <p><a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a></p>
        </div>
      </div>

    </div>

    <div class="form">
      <div id="sendmessage">{{__('messages.contact.sent')}}</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="{{__('messages.contact.error1')}}" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="{{__('messages.contact.error2')}}" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="{{__('messages.contact.error3')}}" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="{{__('messages.contact.error4')}}" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">{{__('messages.contact.submit')}}</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
