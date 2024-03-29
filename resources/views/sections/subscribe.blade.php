<section id="subscribe">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>{{__('messages.subscribe.title')}}</h2>
      <p>{{__('messages.subscribe.subtitle')}}</p>
    </div>

    <form method="POST" action="#">
      <div class="form-row justify-content-center">
        <div class="col-auto">
          <input type="text" class="form-control" placeholder="Enter your Email">
        </div>
        <div class="col-auto">
          <button type="submit">{{__('global.subscribe')}}</button>
        </div>
      </div>
    </form>

  </div>
</section>