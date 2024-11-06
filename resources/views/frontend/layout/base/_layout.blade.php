<div class="page-wrapper">

    @include('frontend.layout.base.partials._topbar')


    @include('frontend.layout.base.partials._header')

    @yield('content')

    @include('frontend.layout.base.partials._footer')

</div><!-- /.page-wrapper -->

@include('frontend.layout.base.partials._mobile_naw_wrapper')
@include('frontend.layout.base.partials._search_popup')
@include('frontend.layout.base.partials._sidebar')




