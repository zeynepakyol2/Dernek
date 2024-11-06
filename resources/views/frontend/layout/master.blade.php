<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ setting('site_name') }}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest">
    <meta name="description" content="Careoxis a clean professional Non Profit Charity HTML Template. Which fits for all kind of charity, fundraising, nonprofit, NGO, donations, church, Mosque and all other non-profit charity website, businesses and NGO.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


{{--    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" href="/assets/vendors/careox-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/careox.css">

    @stack('styles')
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<div class="preloader">
    <div class="preloader__image" style="background-image: url(/assets/images/loader.png);"></div>
</div>
<!-- /.preloader -->

@include('frontend.layout.base._layout')


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="/assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="/assets/vendors/wow/wow.js"></script>
<script src="/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="/assets/vendors/isotope/isotope.js"></script>
<script src="/assets/vendors/slick/slick.min.js"></script>
<script src="/assets/vendors/countdown/countdown.min.js"></script>
<script src="/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<!-- gsap js -->
<script src="/assets/vendors/gsap/gsap.js"></script>
<script src="/assets/vendors/gsap/scrolltrigger.min.js"></script>
<script src="/assets/vendors/gsap/splittext.min.js"></script>
<script src="/assets/vendors/gsap/careox-split.js"></script>
<!-- template js -->
<script src="/assets/js/careox.js"></script>

@stack('scripts')
</body>

</html>
