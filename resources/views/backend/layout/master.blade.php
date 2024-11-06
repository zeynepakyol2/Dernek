<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head>
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://preview.keenthemes.comindex.html" />
    <link rel="shortcut icon" href="/backend/assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/backend/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/backend/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>

    @stack('styles')

</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

@include('backend.layout.partials.theme-mode._init')
<!--temanın istenildiği şekilde ya da sistemde var olana göre belirlenmesini sağlar-->
@include('backend.layout.base._layout')
@include('backend.layout.partials._scrolltop')
{{--@include('backend.layout.partials.modals._upgrade_plan')--}}
{{--@include('backend.layout.partials.modals._new_target')--}}
{{--@include('backend.layout.partials.modals._view_users')--}}
{{--@include('backend.layout.partials.modals.users-search._main')--}}
{{--@include('backend.layout.partials.modals._invite_friends')--}}


<!--begin::Drawers-->



<!--end::Drawers-->

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

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="/backend/assets/plugins/global/plugins.bundle.js"></script>
<script src="/backend/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
@stack('scripts')
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
