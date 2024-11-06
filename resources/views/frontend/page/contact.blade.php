@extends('frontend.layout.master')

@section('title', 'Anasayfa')


@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Bize Ulaşın</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><span>Bize Ulaşın</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="contact-one contact-one--page">
        <div class="contact-one__shape" style="background-image: url(assets/images/shapes/contact-1-shape-2.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="contact-one__image">
                        <div class="contact-one__image__shape" style="background-image: url(assets/images/shapes/contact-1-shape-1.png);"></div>
                        <img src="assets/images/resources/contact-1-1.png" alt="careox">
                        <div class="contact-one__image__icon"><img src="assets/images/shapes/icon-1.png" alt="careox"></div>
                        <div class="contact-one__image__info">
                            <div class="contact-one__image__info__icon"><i class="icofont-phone-circle"></i></div>
                            <p class="contact-one__image__info__title">Need Help Now?</p>
                            <p class="contact-one__image__info__text"><a href="tel:++25844132">++(25)844132</a></p>
                        </div>
                    </div>
                </div><!-- /.col-xl-5 -->
                <div class="col-xl-7">
                    <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="inc/sendemail.php">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR CONTACT NOW</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Our Volunteer Become Us <br>This Contact Now!</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="contact-one__text">
                            Poor address a range of simply application and infrastructure this of passages of available, but the
                            majority have suffered poor alteration in some form.
                        </p>
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your Name">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email Address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="tel" name="phone" placeholder="Phone No">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <div class="form-one__control__select">
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Subject</option>
                                        <option value="1">Volunteer</option>
                                        <option value="2">Donations</option>
                                        <option value="3">Foods Support</option>
                                        <option value="4">Education Support</option>
                                        <option value="4">Medical Support</option>
                                        <option value="4">Sports Support</option>
                                    </select>
                                </div><!-- /.main-menu__language -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write  a Message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="careox-btn"><span>Send Request</span></button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <section class="cta-two">
        <div class="cta-two__shape" style="background-image: url(assets/images/shapes/cta-2-shape-1.png);"></div>
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
