<div class="topbar-two">
    <div class="container">
        <div class="topbar-two__inner">
            <ul class="topbar-two__info">
                @if(!is_null(setting('site_email')))
                <li>
                    <span class="topbar-two__info__icon"><i class="icofont-envelope"></i></span>
                    <a href="mailto:{{ setting('site_email') }}">{{ setting('site_email') }}</a>
                </li>
                @endif
                @if(!is_null(setting('site_address')))
                <li>
                    <span class="topbar-two__info__icon"><i class="icofont-location-pin"></i></span>
                    <a href="{{ setting('google_map_url') }}" target="_blank">{{ setting('site_address') }}</a>
                </li>
                @endif
            </ul><!-- /.topbar-two__info -->
            <ul class="list-unstyled topbar-two__nav">
                <li><a href="login.html">Giriş Yap</a></li>
                <li><a href="register.html">Kaydol</a></li>
                <li><a href="donate.html">Bağış Yap</a></li>
            </ul><!-- /.topbar-two__nav -->
        </div><!-- /.topbar-two__inner -->
    </div><!-- /.container -->
</div><!-- /.topbar-two -->
