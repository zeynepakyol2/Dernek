@extends('frontend.layout.master')

@section('title', 'Etkinlikler')


@section('content')




    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Etkinlikler</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><span>Etkinlikler</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- /.page-header__bg -->

    </div><!-- /.container -->
    </section><!-- /.page-header -->
<!-- /.preloader -->

    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-details__content">
                        <div class="event-details__image">
                            <img src="{{ asset('assets/images/resources/event-details.jpg') }}" alt="careox">
                        </div>
                        <h3 >{{ $event->name }}</h3>
                        <p class="event-details__text">
                            {{ $event->details }}
                        </p>
                        <a href="donate.html" class="careox-btn"><span>Donate Now</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-details__info">
                        <ul class="event-details__info__list">
                            <li>Etkinlik Saati: <span>{{ $event->event_time }}</span></li>
                            <li>Date: <span>{{ $event->event_date->format('d-m-Y H:i') }} - ({{ $event->event_date->diffForHumans() }})</span></li>
                            <li>Category: <span>{{ $event->kategori }}</span></li>
                            <li>Phone: <span>{{ setting('site_telephone') }}</span></li>
                            <li>Location: <span>{{ setting('site_address') }}</span></li>
                        </ul>
                    </div>
                    <div class="event-details__map">
                        <div class="google-map google-map__contact">
                            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen=""></iframe>
                        </div>
                        <!-- /.google-map -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-two">
        <div class="cta-two__shape" style="background-image: url('{{ asset('assets/images/shapes/cta-2-shape-1.png') }}');"></div> <!-- Arka plan resmi yolu güncellendi -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>BECOME A VOLUNTEER</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Let’s Make a Difference</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
                <div class="col-md-5">
                    <div class="cta-two__button">
                        <img src="{{ asset('assets/images/shapes/arrow-1.png') }}" alt="careox">
                        <a href="become-a-volunteer.html" class="careox-btn"><span>Become A Volunteer</span></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.cta-two -->

@endsection
