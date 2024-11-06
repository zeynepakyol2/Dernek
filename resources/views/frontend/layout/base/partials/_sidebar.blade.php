<!-- Sidebar One Start -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <div class="sidebar-one__close"><i class="icofont-close-line"></i></div><!-- /.siderbar-close -->
        <div class="sidebar-one__logo">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/logo-light.png') }}" alt="Careox HTML" width="223"></a>
        </div><!-- /.sidebar-one__logo-box -->
        <p class="sidebar-one__text">
            {{ setting('description') }}
        </p>
        <h4 class="sidebar-one__title">Bize Ulaşın:</h4>
        <ul class="sidebar-one__info">
            <li>
                <span class="fas fa-map-marker-alt"></span>
                <a href="{{ setting('google_map_url') }}">{{ setting('site_address') }}</a>
            </li>
            <li>
                <span class="fas fa-envelope"></span>
                <a href="mailto:{{ setting('site_email') }}">{{ setting('site_email') }}</a>
            </li>
            <li>
                <span class="fas fa-phone-alt"></span>
                <a href="tel:{{ setting('site_telephone') }}">{{ setting('site_telephone') }}</a>
            </li>
        </ul>
        <div class="sidebar-one__social">
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
            <a href="{{ setting('social.instagram') }}" style="--accent-color: #44c895;">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="{{ setting('social.linkedin') }}" style="--accent-color: #44c895;">
                <i class="fab fa-linkedin" aria-hidden="true"></i>
                <span class="sr-only">Linkedin</span>
            </a>
        </div><!-- /sidebar-one__socila -->
        <h4 class="sidebar-one__title">E-Bülten:</h4>
        <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
            @csrf
            <input type="text" name="EMAIL" placeholder="Email adresinizi giriniz">
            <button type="submit" class="fas fa-paper-plane">
                <span class="sr-only" >submit</span><!-- /.sr-only -->
            </button>
        </form><!-- /.footer-widget__newsletter mc-form -->
    </div><!-- /.sidebar__content -->
</aside>
<!-- Sidebar One Start -->
