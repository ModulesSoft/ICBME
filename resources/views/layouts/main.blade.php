<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{__('global.dir')}}">

<head>
  <meta charset="utf-8">
  <title>{{ env('APP_NAME', 'Iranian Conference on Biomedical Engineering') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="{{ $settings['home_description'] }}">
  <meta name="keywords" content="{{ $settings['home_keywords'] }}">

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">-->
  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox2/css/lightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body style="{{ __('global.dir') === 'rtl' ? 'text-align: right;' : '' }}">
  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  @include('sweetalert::alert')

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox2/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  {{-- <script src="{{ asset('js/contactform.js') }}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>