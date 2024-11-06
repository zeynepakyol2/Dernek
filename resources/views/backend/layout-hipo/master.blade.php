<!DOCTYPE html>
{{--<!-- Metronic Version: 8.2.0 -->--}}
<html lang="{{ config('app.locale') }}">
<!--begin::Head-->
<head>
    <base href="/admin">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="@yield('description')"/>
{{--    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />--}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/assets/images/hipo-logo.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/backend/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/backend/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Includable CSS -->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    @stack('styles')
</head>
<!--end::Head-->
<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" @if(isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on")data-kt-app-sidebar-minimize="on" @endif data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >

@include('backend.layout.partials.theme-mode._init')
@include('backend.layout.base._layout')
@include('backend.layout.partials._scrolltop')

<!--begin::Modals-->
{{--@include('backend.layout.partials.modals._upgrade_plan')--}}
{{--@include('backend.layout.partials.modals.create-app._main')--}}
{{--@include('backend.layout.partials.modals._new_target')--}}
{{--@include('backend.layout.partials.modals._view_users')--}}
{{--@include('backend.layout.partials.modals.users-search._main')--}}
{{--@include('backend.layout.partials.modals._invite_friends')--}}
<!--end::Modals-->
@routes

<!--begin::Javascript-->
{{--<script>var hostUrl = "assets/";</script>--}}
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="/backend/assets/plugins/global/plugins.bundle.js"></script>
<script src="/backend/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->



@stack('scripts')
@include('backend.layout.partials._alert')

<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
