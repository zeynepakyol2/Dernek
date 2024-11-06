@extends('frontend.layout.master')

@section('title', 'Bağışlar')


@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Bağışlar</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><span>Bağışlar</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="donations-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our
                    Popular Causes</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Help & Donate Now Find <br>The Popular Cause</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->

            <div class="row gutter-y-30">

                @foreach($donations as $donation)
                    @php
                        $randomKey = array_rand($colors);  // Rastgele bir anahtar seçer
                        $randomColor = $colors[$randomKey];
                    @endphp
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="donations-one__item" style="--accent-color: {{ $randomColor }};">
                            <div class="donations-one__item__image">
                                <img src="assets/images/donation/donation-1-1.jpg" alt="careox">
                                <a href="{{ route('donation', $donation->id) }}"
                                   class="donations-one__item__image__link"></a>
                                <div class="donations-one__item__category">Poor</div>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title">
                                    <a href="{{ route('donation', $donation->id) }}">
                                        {{ $donation->name }}
                                    </a>
                                </h3>
                                <p class="donations-one__item__text">
                                    {{ $donation->summary }}
                                </p>
                                <a class="donations-one__item__rm" href="{{ route('donation', $donation->id) }}"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-one__item__bottom">
                                <div class="donations-one__item__bottom__shape"
                                     style="background-image: url(assets/images/shapes/d-shape-1.png);"></div>
                                <div class="donations-one__item__bottom__progress">
                                    <div class="donations-one__item__bottom__progress__inner count-bar"
                                         data-percent="{{ number_format(($donation->donations->sum('donation_amount') / $donation->goal_amount) *100,0) }}%">
                                        <div
                                            class="donations-one__item__bottom__progress__number count-text">{{ number_format(($donation->donations->sum('donation_amount') / $donation->goal_amount) *100,0) }}
                                            %
                                        </div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donations-one__item__bottom__text">
                                    <span>{{ $donation->goal_amount }} TL Hedef</span>
                                    <span>{{ $donation->donations->sum('donation_amount') }} TL Yapılan Bağış</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                        </div>
                    </div><!-- /.item -->
                @endforeach


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="50ms">
                    <div class="donations-one__item" style="--accent-color: #ff5528;">
                        <div class="donations-one__item__image">
                            <img src="assets/images/donation/donation-1-2.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                            <div class="donations-one__item__category">Raised</div>
                        </div>
                        <div class="donations-one__item__content">
                            <h3 class="donations-one__item__title"><a href="donation-details.html">Get Poor Money Strang
                                    People Acutor.</a></h3>
                            <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                            <a class="donations-one__item__rm" href="donation-details.html"><i
                                    class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-one__item__bottom">
                            <div class="donations-one__item__bottom__shape"
                                 style="background-image: url(assets/images/shapes/d-shape-2.png);"></div>
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="80%">
                                    <div class="donations-one__item__bottom__progress__number count-text">80%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>$13,000 Goals</span>
                                <span>$5,000 Donate</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="donations-one__item" style="--accent-color: #8742e8;">
                        <div class="donations-one__item__image">
                            <img src="assets/images/donation/donation-1-3.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                            <div class="donations-one__item__category">Medical</div>
                        </div>
                        <div class="donations-one__item__content">
                            <h3 class="donations-one__item__title"><a href="donation-details.html">Medical Health or
                                    People React Acutor.</a></h3>
                            <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                            <a class="donations-one__item__rm" href="donation-details.html"><i
                                    class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-one__item__bottom">
                            <div class="donations-one__item__bottom__shape"
                                 style="background-image: url(assets/images/shapes/d-shape-3.png);"></div>
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="62%">
                                    <div class="donations-one__item__bottom__progress__number count-text">62%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>$89,000 Goals</span>
                                <span>$6,000 Donate</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="150ms">
                    <div class="donations-one__item" style="--accent-color: #44c895;">
                        <div class="donations-one__item__image">
                            <img src="assets/images/donation/donation-1-4.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                            <div class="donations-one__item__category">Education</div>
                        </div>
                        <div class="donations-one__item__content">
                            <h3 class="donations-one__item__title"><a href="donation-details.html">Let’s education for
                                    children good life.</a></h3>
                            <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                            <a class="donations-one__item__rm" href="donation-details.html"><i
                                    class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-one__item__bottom">
                            <div class="donations-one__item__bottom__shape"
                                 style="background-image: url(assets/images/shapes/d-shape-4.png);"></div>
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="72%">
                                    <div class="donations-one__item__bottom__progress__number count-text">72%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>$29,000 Goals</span>
                                <span>$7,000 Donate</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="donations-one__item" style="--accent-color: #399be7;">
                        <div class="donations-one__item__image">
                            <img src="assets/images/donation/donation-1-5.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                            <div class="donations-one__item__category">Child</div>
                        </div>
                        <div class="donations-one__item__content">
                            <h3 class="donations-one__item__title"><a href="donation-details.html">Funds For Clean &
                                    Healthy Food</a></h3>
                            <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                            <a class="donations-one__item__rm" href="donation-details.html"><i
                                    class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-one__item__bottom">
                            <div class="donations-one__item__bottom__shape"
                                 style="background-image: url(assets/images/shapes/d-shape-4.png);"></div>
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="75%">
                                    <div class="donations-one__item__bottom__progress__number count-text">75%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>$29,000 Goals</span>
                                <span>$7,000 Donate</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="250ms">
                    <div class="donations-one__item" style="--accent-color: #d340c3;">
                        <div class="donations-one__item__image">
                            <img src="assets/images/donation/donation-1-6.jpg" alt="careox">
                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                            <div class="donations-one__item__category">Education</div>
                        </div>
                        <div class="donations-one__item__content">
                            <h3 class="donations-one__item__title"><a href="donation-details.html">We Need Donations for
                                    Medical Health</a></h3>
                            <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet
                                sollic tudin.</p>
                            <a class="donations-one__item__rm" href="donation-details.html"><i
                                    class="icon-right-arrow"></i></a>
                        </div>
                        <div class="donations-one__item__bottom">
                            <div class="donations-one__item__bottom__shape"
                                 style="background-image: url(assets/images/shapes/d-shape-4.png);"></div>
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="85%">
                                    <div class="donations-one__item__bottom__progress__number count-text">85%</div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>$29,000 Goals</span>
                                <span>$7,000 Donate</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div>
    </section>


    @include('frontend.layout.base.partials._become_a_volunteer')

@endsection
