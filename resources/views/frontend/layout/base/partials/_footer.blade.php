<footer class="main-footer background-black">
    <div class="main-footer__bg background-black"
         style="background-image: url({{ asset('assets/images/backgrounds/footer-bg-1-1.jpg') }});"></div>
    <!-- /.main-footer__bg -->
    <div class="container">
        <div class="main-footer__top">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="main-footer__top__left">
                        <div class="main-footer__top__left__icon"><i class="icon-messages"></i></div>
                        <h5 class="main-footer__top__left__title">E-Bültenimiz</h5>
                        <p class="main-footer__top__left__text">Sonradan Düzenlenecek</p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                        <input type="text" name="EMAIL" placeholder="Enter email address">
                        <button type="submit" class="fas fa-paper-plane">
                            <span class="sr-only">submit</span><!-- /.sr-only -->
                        </button>
                    </form><!-- /.footer-widget__newsletter mc-form -->
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </div>
            </div>
        </div>
    </div><!-- /.main-footer__top -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="footer-widget footer-widget--about">
                    <a href="index.html" class="footer-widget__logo">
                        <img src="{{ asset('assets/images/logo-light.png') }}" width="223" alt="Careox HTML Template">
                    </a>
                    <p class="footer-widget__text">
                       Burası sonra düzenlenecek.
                    </p>
                    <div class="footer-widget__box">
                        <div class="footer-widget__box__icon"><i class="icon-phone-call"></i></div>
                        <p class="footer-widget__box__text">Yardım Hattı 24/7 <a href="tel:{{ setting('site_telephone') }}">{{ setting('site_telephone') }}</a></p>
                    </div>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="150ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Hizmet</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="donate-right.html">Bağış Yap</a></li>
                        <li><a href="donate-right.html">Eğitim Desteği</a></li>
                        <li><a href="events-list.html">Kampanyalarımız</a></li>
                        <li><a href="events-list.html">Kampanyalarımız</a></li>
                        <li><a href="events-list.html">Kampanyalarımız</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms">
                <div class="footer-widget footer-widget--links-two">
                    <h2 class="footer-widget__title">Hızlı Bağlantı</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="about.html">Hakkımızda</a></li>
                        <li><a href="blog-list.html">Haberler</a></li>
                        <li><a href="events-list.html">Kampanyalarımız</a></li>
                        <li><a href="contact.html">Bize Ulaşın</a></li>
                        <li><a href="login.html">Giriş Yap</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="250ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">İletişim Bilgileri</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__info">
                        <li style="--accent-color: #ffa415;">
                            <span class="footer-widget__info__icon"><i class="icofont-clock-time"></i></span>
                            {{ setting('working_hour') }}
                        </li>
                        <li style="--accent-color: #ff5528;">
                            <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                            {{ setting('site_address') }}
                        </li>
                        <li style="--accent-color: #8139e7;">
                            <span class="footer-widget__info__icon"><i class="icofont-email"></i></span>
                            <a href="mailto:{{ setting('site_email') }}">{{ setting('site_email') }}</a>
                        </li>
                    </ul><!-- /.list-unstyled -->
                    <div class="footer-widget__social">
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
                    </div><!-- /.footer-widget__social -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by Careox HTML Template.
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->


</footer><!-- /.main-footer -->
