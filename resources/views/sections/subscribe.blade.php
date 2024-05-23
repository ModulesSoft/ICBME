<section id="subscribe">
  @if(session('message'))
  <div class="alert alert-danger">
    {{ session('message') }}
  </div>
  @endif
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>{{__('messages.subscribe.title')}}</h2>
      <p>{{__('messages.subscribe.subtitle')}}</p>
    </div>

    <form method="POST" action="{{ route('subscription.subscribe') }}">
      @csrf
      <div class="form-row justify-content-center">
        <div class="col-auto">
          <input name="email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-auto">
          <button type="submit">{{__('global.subscribe')}}</button>
        </div>
      </div>
    </form>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('#subscribe form');
      const emailInput = form.querySelector('input[name="email"]');

      form.addEventListener('submit', function(event) {
        if (!isValidEmail(emailInput.value)) {
          event.preventDefault();
          alert('Please enter a valid email address.');
        }
      });

      function isValidEmail(email) {
        // Regular expression to validate email address
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }
    });
  </script>

</section>