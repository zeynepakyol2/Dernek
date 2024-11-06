<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column "
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    @include('backend.layout.base.sidebar._logo')
    @include('backend.layout.base.sidebar._menu')
    @include('backend.layout.base.sidebar._footer')

</div>
<!--end::Sidebar-->