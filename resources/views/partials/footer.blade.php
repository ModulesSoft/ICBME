<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="{{ $settings['footer_logo'] ?? '' }}" alt="ICBME logo">
                    <p><strong>{{ $settings['footer_description'] ?? '' }}</strong></p>
                    @if (isset($totalHits))
                    <p>Total visits: {{ $totalHits }}</p>
                    <p>Today visits: {{ $todayHits }}</p>
                    @endif
                    <div class="mt-4">
                        <!-- <script language="javascript" src="https://conf.isc.ac/trustseal/checkIsc.php?code=۰۱۲۲۰-۴۲۹۹۶"></script> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('messages.footer.links.title') }}</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_ieee']??'#' }}">{{ __('messages.footer.links.link1') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_ieeeir']??'#' }}">{{ __('messages.footer.links.link2') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_aut']??'#' }}">{{ __('messages.footer.links.link3') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_isc']??'#' }}">{{ __('messages.footer.links.link4') }}</a>
                        </li>
                        @guest
                        <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">{{ __('messages.footer.links.link5') }}</a></li>
                        @endguest
                        @auth
                        <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">{{ __('messages.footer.links.link6') }}</a></li>
                        @endauth
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('messages.footer.links2.title') }}</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_isbme']??'#' }}">{{ __('messages.footer.links2.link1') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_edas']??'#' }}">{{ __('messages.footer.links2.link2') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_msrt']??'#' }}">{{ __('messages.footer.links2.link3') }}</a>
                        </li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{ $settings['footer_mohme']??'#' }}">{{ __('messages.footer.links2.link4') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>{{ __('messages.footer.contact.title') }}</h4>
                    <p>
                        {!! $settings['footer_address'] ?? '' !!}<br>
                        <strong>Phone:</strong> {{ $settings['contact_phone'] }}<br>
                        <strong>Email:</strong> {{ $settings['contact_email'] }}<br>
                    </p>

                    <div class="social-links">
                        <a href="{{ $settings['footer_telegram'] ?? '' }}" class="telegram"><i class="fa fa-telegram"></i></a>
                        <a href="{{ $settings['footer_edas'] ?? '' }}" class="telegram"><img style="height: 20px;border-radius: 50%" src="{{ asset('img/edas.png') }}" alt=''></a>
                        <a href="{{ $settings['footer_payment'] ?? '' }}" class="telegram"><img style="height: 20px;border-radius: 50%" src="{{ asset('img/payment.png') }}" alt=''></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            {{ __('messages.footer.copyright.row1') }}
        </div>
        <div class="credits">
            <a href="{{ __('messages.footer.copyright.link') }}">{{ __('messages.footer.copyright.row2') }}</a>
            <br>
            <a class="developer" href="https://modulessoft.com">By ModulesSoft!</a>
        </div>
    </div>
</footer><!-- #footer -->