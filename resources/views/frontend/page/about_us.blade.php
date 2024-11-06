@extends('frontend.layout.master')
@section('title', 'Hakkımızda')
@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Hakkımızda</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><span>Hakkımızda</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="about-one about-one--about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-one__image__one">
                            <img src="assets/images/resources/about-1-3.jpg" alt="careox">
                        </div>
                        <div class="about-one__image__two">
                            <img src="assets/images/resources/about-1-4.jpg" alt="careox">
                            <div class="about-one__image__video">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="icofont-ui-play"></i></a>Always Support Us!
                            </div>
                        </div>
                        <div class="about-one__image__shape-two"><img src="assets/images/shapes/about-1-shape-5.png" alt="careox"></div>
                        <div class="about-one__image__shape-three"><img src="assets/images/shapes/about-1-shape-3.png" alt="careox"></div>
                    </div><!-- /.about__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR ABOUT US</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">We Believe This Lifes About Give For Poor People.</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            Poor address a range of simply application and infrastructure this of passages of available, but
                            the majority have suffered poor alteration in some form.
                        </p>
                        <div class="row gutter-y-30">
                            <div class="col-md-6">
                                <div class="about-one__content__box" style="--accent-color: #ffa415;">
                                    <div class="about-one__content__box__top">
                                        <div class="about-one__content__box__icon"><span class="icon-zakat"></span></div>
                                        <h5 class="about-one__content__box__title">Treatment Help</h5>
                                    </div>
                                    <p class="about-one__content__box__text"><span class="about-one__content__box__text__icon"><i class="icofont-check-circled"></i></span>No matter what you you have.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-one__content__box" style="--accent-color: #ff5528;">
                                    <div class="about-one__content__box__top">
                                        <div class="about-one__content__box__icon"><span class="icon-charity"></span></div>
                                        <h5 class="about-one__content__box__title">Help Raising</h5>
                                    </div>
                                    <p class="about-one__content__box__text"><span class="about-one__content__box__text__icon"><i class="icofont-check-circled"></i></span>No matter what you you have.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__content__border"></div>
                        <ul class="about-one__content__list">
                            <li>
                                <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                We help companies develop powerful corporate social <a href="about.html">Responsibility,</a>
                            </li>
                            <li>
                                <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                Helped fund 3,265 Project powerful corporate poor.
                            </li>
                        </ul>
                        <a href="about.html" class="careox-btn"><span>About More</span></a>
                    </div><!-- /.about__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="about-one__text wow fadeInUp"><span>#</span> We Give Donations Poor People Impact on Someone’s Life.
                <a href="donation.html" class="careox-btn"><span>Donate Now</span></a>
            </div>
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="funfact-one funfact-one--about">
        <div class="container wow fadeInUp">
            <ul class="list-unstyled funfact-one__list">
                <li class="funfact-one__item count-box" style="--accent-color: #ffa415;">
                    <div class="funfact-one__icon">
                        <i class="icon-charity-two"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text" data-stop="232" data-speed="1500"></span>K
                        </h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Poor Educate</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #ff5528;">
                    <div class="funfact-one__icon">
                        <i class="icon-zakat"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text" data-stop="99" data-speed="1500"></span>M+
                        </h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Donate now</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #8139e7;">
                    <div class="funfact-one__icon">
                        <i class="icon-interactions"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text" data-stop="132" data-speed="1500"></span>K
                        </h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Clients Help</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
                <li class="funfact-one__item count-box" style="--accent-color: #44c895;">
                    <div class="funfact-one__icon">
                        <i class="icon-multiple-users-silhouette"></i>
                    </div><!-- /.funfact-one__icon -->
                    <div class="funfact-one__content">
                        <h3 class="funfact-one__count"><span class="count-text" data-stop="35" data-speed="1500"></span>K+
                        </h3>
                        <!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Team Support</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__content -->
                </li><!-- /.funfact-one__item -->
            </ul><!-- /.list-unstyled funfact-one__list -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->

    <section class="donations-three">
        <div class="donations-three__bg" style="background-image: url(assets/images/backgrounds/donation-bg-3.jpg);"></div>
        <div class="container">
            <div class="sec-title text-left">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Popular Causes</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Help & Donate Now Find <br>The Popular Cause</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="donations-three__carousel careox-owl__carousel owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-up-arrow-two\"></span>","<span class=\"icon-down-arrow-two\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"500": {
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                <div class="item">
                    <div class="donations-three__item" style="--accent-color: #ffa415;">
                        <div class="donations-three__item__image">
                            <img src="assets/images/donation/donation-3-1.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-three__item__image__link"></a>
                            <div class="donations-three__item__category">Poor</div>
                            <a class="donations-three__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-three__item__content">
                            <h3 class="donations-three__item__title"><a href="donation-details.html">There Are Many
                                    Variations Qassages Poor</a></h3>
                            <p class="donations-three__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                        </div>
                        <div class="donations-three__item__border"></div>
                        <div class="donations-three__item__bottom">
                            <div class="donations-three__item__bottom__progress">
                                <div class="donations-three__item__bottom__progress__inner count-bar" data-percent="85%">
                                    <div class="donations-three__item__bottom__progress__number count-text">85%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-three__item__bottom__text">
                                <span>$23,000 Goals</span>
                                <span>$9,000 Donate</span>
                            </div>
                        </div><!-- /.donations-three__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="item">
                    <div class="donations-three__item" style="--accent-color: #ff5528;">
                        <div class="donations-three__item__image">
                            <img src="assets/images/donation/donation-3-2.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-three__item__image__link"></a>
                            <div class="donations-three__item__category">Raised</div>
                            <a class="donations-three__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-three__item__content">
                            <h3 class="donations-three__item__title"><a href="donation-details.html">It is a long
                                    established fact that a reader</a></h3>
                            <p class="donations-three__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                        </div>
                        <div class="donations-three__item__border"></div>
                        <div class="donations-three__item__bottom">
                            <div class="donations-three__item__bottom__progress">
                                <div class="donations-three__item__bottom__progress__inner count-bar" data-percent="80%">
                                    <div class="donations-three__item__bottom__progress__number count-text">80%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-three__item__bottom__text">
                                <span>$13,000 Goals</span>
                                <span>$5,000 Donate</span>
                            </div>
                        </div><!-- /.donations-three__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="item">
                    <div class="donations-three__item" style="--accent-color: #8742e8;">
                        <div class="donations-three__item__image">
                            <img src="assets/images/donation/donation-3-3.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-three__item__image__link"></a>
                            <div class="donations-three__item__category">Medical</div>
                            <a class="donations-three__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-three__item__content">
                            <h3 class="donations-three__item__title"><a href="donation-details.html">We Can Aenean Poor leo
                                    Nec This Enovation.</a></h3>
                            <p class="donations-three__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                        </div>
                        <div class="donations-three__item__border"></div>
                        <div class="donations-three__item__bottom">
                            <div class="donations-three__item__bottom__progress">
                                <div class="donations-three__item__bottom__progress__inner count-bar" data-percent="72%">
                                    <div class="donations-three__item__bottom__progress__number count-text">72%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-three__item__bottom__text">
                                <span>$89,000 Goals</span>
                                <span>$6,000 Donate</span>
                            </div>
                        </div><!-- /.donations-three__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="item">
                    <div class="donations-three__item" style="--accent-color: #44c895;">
                        <div class="donations-three__item__image">
                            <img src="assets/images/donation/donation-3-4.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-three__item__image__link"></a>
                            <div class="donations-three__item__category">Education</div>
                            <a class="donations-three__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-three__item__content">
                            <h3 class="donations-three__item__title"><a href="donation-details.html">Let’s Education for
                                    Children Good Future Life.</a></h3>
                            <p class="donations-three__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                        </div>
                        <div class="donations-three__item__border"></div>
                        <div class="donations-three__item__bottom">
                            <div class="donations-three__item__bottom__progress">
                                <div class="donations-three__item__bottom__progress__inner count-bar" data-percent="90%">
                                    <div class="donations-three__item__bottom__progress__number count-text">90%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-three__item__bottom__text">
                                <span>$29,000 Goals</span>
                                <span>$7,000 Donate</span>
                            </div>
                        </div><!-- /.donations-three__item__bottom -->
                    </div>
                </div><!-- /.item -->
            </div><!-- /.donations-three__slider -->
        </div>
    </section>

    <section class="team-one team-one--about">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Expert Team</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Meet The Team Member</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="team-one__carousel careox-owl__carousel careox-owl__carousel--with-shadow careox-owl__carousel--basic-nav owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"500": {
					"items": 2
				},
				"992": {
					"items": 3
				},
				"1200": {
					"items": 4
				}
			}
			}'>
                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #ffa415;'>
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-1.jpg" alt="Bern Dorey">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3 class="team-card__title">
                                <a href="team-details.html">Bern Dorey</a>
                            </h3><!-- /.team-card__title -->
                            <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            <div class="team-card__hover">
                                <span class="team-card__hover__btn"></span>
                                <div class="team-card__hover__social">
                                    <a href="https://facebook.com" style="--accent-color: #ffa415;">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com" style="--accent-color: #fc5528;">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com" style="--accent-color: #8139e7;">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com" style="--accent-color: #44c895;">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #fc5528;'>
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-2.jpg" alt="John Hines">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3 class="team-card__title">
                                <a href="team-details.html">John Hines</a>
                            </h3><!-- /.team-card__title -->
                            <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            <div class="team-card__hover">
                                <span class="team-card__hover__btn"></span>
                                <div class="team-card__hover__social">
                                    <a href="https://facebook.com" style="--accent-color: #ffa415;">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com" style="--accent-color: #fc5528;">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com" style="--accent-color: #8139e7;">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com" style="--accent-color: #44c895;">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #8139e7;'>
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-3.jpg" alt="Jason Bower">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3 class="team-card__title">
                                <a href="team-details.html">Jason Bower</a>
                            </h3><!-- /.team-card__title -->
                            <p class="team-card__designation">Volunter</p><!-- /.team-card__designation -->
                            <div class="team-card__hover">
                                <span class="team-card__hover__btn"></span>
                                <div class="team-card__hover__social">
                                    <a href="https://facebook.com" style="--accent-color: #ffa415;">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com" style="--accent-color: #fc5528;">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com" style="--accent-color: #8139e7;">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com" style="--accent-color: #44c895;">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #44c895;'>
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-4.jpg" alt="Phillip Haris">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3 class="team-card__title">
                                <a href="team-details.html">Phillip Haris</a>
                            </h3><!-- /.team-card__title -->
                            <p class="team-card__designation">Volunter</p><!-- /.team-card__designation -->
                            <div class="team-card__hover">
                                <span class="team-card__hover__btn"></span>
                                <div class="team-card__hover__social">
                                    <a href="https://facebook.com" style="--accent-color: #ffa415;">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com" style="--accent-color: #fc5528;">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com" style="--accent-color: #8139e7;">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com" style="--accent-color: #44c895;">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__hover -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-one -->

    <div class="client-carousel client-carousel--about">
        <div class="container">
            <div class="client-carousel__one careox-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "360":{
                    "items":2
                },
                "575":{
                    "items":3
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="careox">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="careox">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->

    <section class="video-one video-one--about">
        <div class="video-one__bg jarallax" data-jarallax="" data-speed="0.3" data-imgposition="50% -100%" style="background-image: url(assets/images/backgrounds/video-bg-1-2.jpg);"></div> <!-- /.video-one__bg -->
        <div class="video-one__shape-one" style="background-image: url(assets/images/shapes/video-shape-1.png);"></div>
        <!-- /.video-one__shape -->
        <div class="video-one__shape-two" style="background-image: url(assets/images/shapes/video-shape-2.png);"></div>
        <!-- /.video-one__shape -->
        <div class="container">
            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                <i class="icon-play-button"></i>
                <i class="ripple"></i>
            </a>
            <h5 class="video-one__sub-title">Video Here to Support</h5>
            <h2 class="video-one__title">We Help Poor This Lifes Service</h2><!-- /.video-one__title -->
            <p class="video-one__text">Lorem ipsum dolor sit amet, conse dtetur adipi sicing <br>elitare many variations.
            </p><!-- /.video-one__text -->
            <a href="about.html" class="careox-btn"><span>Discover More</span></a>
        </div><!-- /.container -->
    </section><!-- /.video-one -->

    <!-- Feature Start -->
    <section class="feature-one feature-one--about">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="feature-one__item" style="--accent-color: #ffa415;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape" style="background-image: url(assets/images/shapes/feature-1-shape.png);"></div>
                            <div class="feature-one__item__icon"><span class="icon-zakat"></span></div>
                            <h3 class="feature-one__item__title">Treatment Help</h3>
                            <p class="feature-one__item__text">No matter what have.</p>
                            <div class="feature-one__item__number"></div>
                            <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__item feature-one__item--reverse" style="--accent-color: #fc5528;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape" style="background-image: url(assets/images/shapes/feature-1-shape.png);"></div>
                            <div class="feature-one__item__icon"><span class="icon-charity-two"></span></div>
                            <h3 class="feature-one__item__title">Charity Donate</h3>
                            <p class="feature-one__item__text">No matter what have.</p>
                            <div class="feature-one__item__number"></div>
                            <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item" style="--accent-color: #8139e7;">
                        <div class="feature-one__item__inner">
                            <div class="feature-one__item__shape" style="background-image: url(assets/images/shapes/feature-1-shape.png);"></div>
                            <div class="feature-one__item__icon"><span class="icon-generous"></span></div>
                            <h3 class="feature-one__item__title">Money Raised</h3>
                            <p class="feature-one__item__text">No matter what have.</p>
                            <div class="feature-one__item__number"></div>
                            <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <section class="country-one">
        <div class="container">
            <div class="sec-title text-left">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Contribution country</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">The Popular Contribution Towards<br> Country Find Helping</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="country-one__carousel careox-owl__carousel owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-up-arrow-two\"></span>","<span class=\"icon-down-arrow-two\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"500": {
					"items": 2
				},
				"992": {
					"items": 3
				},
				"1200": {
					"items": 4
				}
			}
			}'>
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #ffa415;" data-wow-delay="00ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-1.png" alt="careox">
                            <div class="country-one__item__count">23k</div>
                        </div>
                        <h3 class="country-one__item__title">Ecuador</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #ff5528;" data-wow-delay="50ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-2.png" alt="careox">
                            <div class="country-one__item__count">22k</div>
                        </div>
                        <h3 class="country-one__item__title">Sweden</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #8139e7;" data-wow-delay="100ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-3.png" alt="careox">
                            <div class="country-one__item__count">24k</div>
                        </div>
                        <h3 class="country-one__item__title">Kazakhstan</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #44c895;" data-wow-delay="150ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-4.png" alt="careox">
                            <div class="country-one__item__count">21k</div>
                        </div>
                        <h3 class="country-one__item__title">Kyrgyzstan</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #d340c3;" data-wow-delay="200ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-5.png" alt="careox">
                            <div class="country-one__item__count">20k</div>
                        </div>
                        <h3 class="country-one__item__title">Haiti City</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #399be7;" data-wow-delay="250ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-6.png" alt="careox">
                            <div class="country-one__item__count">25k</div>
                        </div>
                        <h3 class="country-one__item__title">Hong Kong</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #fc642f;" data-wow-delay="300ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-7.png" alt="careox">
                            <div class="country-one__item__count">24k</div>
                        </div>
                        <h3 class="country-one__item__title">Saudi Arabia</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="country-one__item text-center wow fadeInUp" style="--accent-color: #034ea2;" data-wow-delay="350ms">
                        <div class="country-one__item__flag">
                            <img src="assets/images/resources/county-1-8.png" alt="careox">
                            <div class="country-one__item__count">22k</div>
                        </div>
                        <h3 class="country-one__item__title">Spain City</h3>
                        <p class="country-one__item__text">Ut sit amet diam quis massa pulvinar dapibus</p>
                        <div class="country-one__item__rm">
                            <a href="about.html">Read More</a>
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div><!-- /.pricing-one__card -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.country-one -->

    <section class="instagram-one instagram-one--about">
        <div class="container-fluid">
            <div class="instagram-one__carousel careox-owl__carousel owl-carousel owl-theme" data-owl-options='{
			"items": 5,
			"margin": 20,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": true,
			"responsive": {
				"0": {
					"items": 1
				},
				"575": {
					"items": 2
				},
				"992": {
					"items": 3
				},
				"1200": {
					"items": 4
				},
				"1600": {
					"items": 5
				}
			}
			}'>
                <div class="item">
                    <a href="donate.html">
                        <img src="assets/images/instagram/1.jpg" alt="careox">
                        <h5 class="instagram-one__sub-title">Donate to</h5>
                        <h4 class="instagram-one__title">Home</h4>
                    </a>
                </div><!-- /.item -->
                <div class="item">
                    <a href="donate.html">
                        <img src="assets/images/instagram/2.jpg" alt="careox">
                        <h5 class="instagram-one__sub-title">Donate to</h5>
                        <h4 class="instagram-one__title">Education</h4>
                    </a>
                </div><!-- /.item -->
                <div class="item">
                    <a href="donate.html">
                        <img src="assets/images/instagram/1.jpg" alt="careox">
                        <h5 class="instagram-one__sub-title">Donate to</h5>
                        <h4 class="instagram-one__title">Medical</h4>
                    </a>
                </div><!-- /.item -->
                <div class="item">
                    <a href="donate.html">
                        <img src="assets/images/instagram/4.jpg" alt="careox">
                        <h5 class="instagram-one__sub-title">Donate to</h5>
                        <h4 class="instagram-one__title">Sports</h4>
                    </a>
                </div><!-- /.item -->
                <div class="item">
                    <a href="donate.html">
                        <img src="assets/images/instagram/5.jpg" alt="careox">
                        <h5 class="instagram-one__sub-title">Donate to</h5>
                        <h4 class="instagram-one__title">Foods</h4>
                    </a>
                </div><!-- /.item -->
            </div><!-- /.slider -->
        </div><!-- /.container -->
    </section><!-- /.instagram -->



</div><!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt=""></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@careox.com">needhelp@careox.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://facebook.com" style="--accent-color: #ffa415;">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com" style="--accent-color: #fc5528;">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://pinterest.com" style="--accent-color: #8139e7;">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href="https://instagram.com" style="--accent-color: #44c895;">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="careox-btn">
                <span><i class="icon-magnifying-glass"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
    @include('frontend.layout.base.partials._become_a_volunteer')

@endsection







