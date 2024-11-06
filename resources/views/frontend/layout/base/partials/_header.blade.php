<header class="main-header main-header--four sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Careox HTML" width="223">
                </a>
            </div><!-- /.main-header__logo -->
            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">

                    <li>
                        <a href="{{ route('homepage') }}">Anasayfa</a>
                    </li>
                    <li>
                        <a href="{{ route('about_us') }}">Hakkımızda</a>
                    </li>

                    <li>
                        <a href="{{ route('donations') }}">Bağışlar</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">Sayfalar</a>
                        <ul>
                            <li class="dropdown">
                                <a href="{{ route('events') }}">Etkinlikler</a>

                            </li>
                            <li class="dropdown">
                                <a href="#">Volunteer</a>
                                <ul>
                                    <li><a href="team.html">Our Volunteer</a></li>
                                    <li><a href="team-carousel.html">Volunteer Carousel</a></li>
                                    <li><a href="team-details.html">Volunteer Details</a></li>
                                </ul>
                            </li>
                            <li><a href="become-a-volunteer.html">Become A Volunteer</a></li>
                            <li><a href="reviews.html">Testimonials</a></li>
                            <li><a href="reviews-carousel.html">Testimonials Carousel</a></li>
                            <li><a href="packages.html">Pricing</a></li>
                            <li><a href="packages-carousel.html">Pricing Carousel</a></li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                                <ul>
                                    <li><a href="gallery.html">Gallery masonry</a></li>
                                    <li><a href="gallery-filter.html">Gallery filter</a></li>
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Donations</a>
                        <ul class="sub-menu">
                            <li class="dropdown">
                                <a href="#">Donations Grid</a>
                                <ul class="sub-menu">
                                    <li><a href="donations-one.html">Donations 01</a></li>
                                    <li><a href="donations-two.html">Donations 02</a></li>
                                    <li><a href="donations-three.html">Donations 03</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Donations Carousel</a>
                                <ul class="sub-menu">
                                    <li><a href="donations-four.html">Donations 01</a></li>
                                    <li><a href="donations-five.html">Donations 02</a></li>
                                    <li><a href="donations-six.html">Donations 03</a></li>
                                </ul>
                            </li>
                            <li><a href="donations-details.html">Donations Details</a></li>
                            <li><a href="donate.html">Donate Now</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="dropdown">
                                <a href="#">Products</a>
                                <ul class="sub-menu">
                                    <li><a href="products.html">No Sidebar</a></li>
                                    <li><a href="products-left.html">Left Sidebar</a></li>
                                    <li><a href="products-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="products-carousel.html">Products Carousel</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">News</a>
                        <ul class="sub-menu">
                            <li class="dropdown">
                                <a href="#">News grid</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">No sidebar</a></li>
                                    <li><a href="blog-grid-left.html">Left sidebar</a></li>
                                    <li><a href="blog-grid-right.html">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">News list</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list.html">No Sidebar</a></li>
                                    <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                    <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-carousel.html">News carousel</a></li>
                            <li class="dropdown">
                                <a href="#">News details</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details.html">No Sidebar</a></li>
                                    <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                    <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Bize Ulaşın</a>
                    </li>
                </ul>
            </nav><!-- /.main-header__nav -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="donate.html" class="careox-btn"><span><i class="icofont-heart"></i>Donate Now</span></a>
                <a href="#" class="search-toggler main-header__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="cart.html" class="main-header__cart">
                    <i class="icon-shopping-cart" aria-hidden="true"></i>
                    <span class="main-header__cart__count">02</span>
                    <span class="sr-only">Cart</span>
                </a><!-- /.search-toggler -->
                <a href="#" class="main-header--four__toggler">
                    <div class="main-header--four__toggler__wrapper">
                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                </a>
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
