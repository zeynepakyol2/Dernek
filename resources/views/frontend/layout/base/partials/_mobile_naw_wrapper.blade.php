<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/logo-light.png') }}" width="155" alt=""></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ setting('site_email') }}">{{ setting('site_email') }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ setting('site_telephone') }}">{{ setting('site_telephone') }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="{{ setting('social.facebook') }}" style="--accent-color: #ffa415;">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="{{ setting('social.twitter') }}" style="--accent-color: #fc5528;">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="{{ setting('social.pinterest') }}" style="--accent-color: #8139e7;">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href=""{{ setting('social.instagram') }}" style="--accent-color: #44c895;">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="{{ setting('social.linkedin') }}" style="--accent-color: #44c895;">
            <i class="fab fa-linkedin" aria-hidden="true"></i>
            <span class="sr-only">Linkedin</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
