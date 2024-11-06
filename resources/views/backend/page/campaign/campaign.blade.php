@extends('backend.layout.master')
@section('title', 'Kampanyalar')
@push('styles')
    <link href="/backend/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

@endpush

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Kampanyalar</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Kampanyalar</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#campaign_create_modal">Yeni Kampanya Ekle
                </button>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Kampanyalar</h3>

                </div>
                <div class="card-body">

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <input type="text" data-kt-docs-table-filter="search"
                                   class="form-control form-control-solid w-250px ps-15"
                                   placeholder="Kampanya Ara"/>
                        </div>
                        <!--end::Search-->

                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip"
                                    title="Coming Soon">
                                <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Filter
                            </button>
                            <!--end::Filter-->

                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                                <i class="ki-duotone ki-plus fs-2"></i>
                                Add Customer
                            </button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                             data-kt-docs-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                            </div>

                            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                                Selection Action
                            </button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Datatable-->
                    <table id="campaign_datatable" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">

                            <th>#</th>
                            <th>Kampanya Adı</th>
                            <th>Hedef</th>
                            <th>Özet</th>
                            <th>Başlangıç ve Bitiş Tarihi</th>
                            <th>Durum</th>
                            <th>Oluşturma Tarihi</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        </tbody>
                    </table>
                    <!--end::Datatable-->

                </div>


            </div>

        </div>
        <!--end::Content container-->
    </div>
    <!--begin::Campaign create modal-->
    <div class="modal fade" tabindex="-1" id="campaign_create_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Yeni Kampanya Ekle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="campaign_create_form">

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kampanya Adı</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="name"
                                               class="form-control form-control-lg form-control-solid"
                                               placeholder="Kampanya Adı" required/>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Hedefi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="goal_amount"
                                       class="form-control form-control-lg form-control-solid"
                                       step=".01" min="0.00" max="100000.00"
                                       placeholder="Kampanya Hedefi" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Kampanya Özeti</span>
                                <span class="ms-1" data-bs-toggle="tooltip">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                            </label>
                            <!--end::Label-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="summary"
                                       class="form-control form-control-lg form-control-solid" required
                                       placeholder="Kampanya Özeti"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kampanya Açıklaması</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="description"
                                       class="form-control form-control-lg form-control-solid" required
                                       placeholder="Kampanya Açıklaması"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Başlangıç Tarihi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="start_date"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Başlangıç Tarihi" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Bitiş Tarihi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="end_date"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Bitiş Tarihi"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Aktiflik</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">

                                <select class="form-select" data-kt-select2="true" aria-label="Durum seçin" id="edit_status" name="status" required>
                                    <option>Bir değer seçin</option>
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Pasif</option>

                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" data-bs-dismiss="modal"
                                class="btn btn-light btn-active-light-primary me-2">Kapat
                        </button>
                        <button type="submit" class="btn btn-primary" id="campaign_create_button">Yeni Kampanya Ekle
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Campaign create modal-->

    <!--begin::Campaign edit modal-->
    <div class="modal fade" tabindex="-1" id="campaign_edit_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Kampanya Düzenle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="campaign_edit_form">
                    <input type="hidden" name="campaignID" >
                    <input type="hidden" name="campaignPOST" value="1">
                    <!--begin::Card body-->
                    <div class="modal-body">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kampanya Adı</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kampanya Hedefi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="goal_amount" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Kampanya Özeti</span>
                                <span class="ms-1" data-bs-toggle="tooltip" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">

                                            </i>
                                        </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="summary" class="form-control form-control-lg form-control-solid"  required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kampanya Açıklaması</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Başlangıç Tarihi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="start_date" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Bitiş Tarihi</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="end_date" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Aktiflik</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" aria-label="Durum seçin" name="status" required>
                                    <option>Bir değer seçin</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>

                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                        <button type="submit" class="btn btn-primary" id="campaign_edit_button">Değişikliği Kaydet</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::User edit modal-->
@endsection
@push('scripts')

    <script src="/backend/assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script>
        "use strict";

        // Class definition
        var KTDatatablesServerSide = function () {
            // Shared variables
            var table;
            var dt;
            var filterPayment;

            // Private functions
            var initDatatable = function () {
                dt = $("#campaign_datatable").DataTable({
                    searchDelay: 500,
                    processing: true,
                    serverSide: true,
                    order: [[1, 'asc']],
                    stateSave: true,
                    select: {
                        style: 'multi',
                        selector: 'td:first-child input[type="checkbox"]',
                        className: 'row-selected'
                    },
                    ajax: {
                        url: '{{ route('admin.campaigns') }}',
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
                    },
                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'goal_amount'},
                        {data: 'summary'},
                        {data: null},
                        {data: 'status'},
                        {data: 'created_at'},
                        {data: null},
                    ],
                    columnDefs: [

                        {
                          targets: 2,
                            render: function (data) {
                              return data + ' TL'
                            }
                        },
                        {
                            targets: 4,
                            render: function (data, type, row) {
                               return moment(data.start_date).format('DD-MM-YYYY H:mm') + ' - '+ moment(data.end_date).format('DD-MM-YYYY H:mm');
                            }
                        },
                        {
                            targets: 5,
                            render: function (data, type, row) {
                               switch (data) {
                                   case 'active':
                                       return '<span class="badge badge-light-success">Aktif</span>'
                                   break
                                   case 'inactive':
                                       return '<span class="badge badge-light-danger">Pasif</span>';
                                   break
                                   default :
                                       return '<span class="badge badge-light-info">'+data+'</span>'

                               }
                            }
                        },
                        {
                          target: -2,
                          render: function (data) {
                              return moment(data).format('DD-MM-YYYY H:mm');
                          }
                        },
                        {
                            targets: -1,
                            data: null,
                            orderable: false,
                            className: 'text-end',
                            render: function (data, type, row) {
                                return `
        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
            İşlemler
            <span class="svg-icon fs-5 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                    </g>
                </svg>
            </span>
        </a>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="javascript:campaignEdit(`+data.id+`)" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                    Düzenle
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                    Delete
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu-->
        `;
                            },
                        },
                    ],
                    // Add data-filter attribute
                    createdRow: function (row, data, dataIndex) {
                        // $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
                    }
                });

                table = dt.$;

                // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
                dt.on('draw', function () {
                    initToggleToolbar();
                    // toggleToolbars();
                    // handleDeleteRows();
                    KTMenu.createInstances();
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = function () {
                const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    dt.search(e.target.value).draw();
                });
            }

            // Filter Datatable
            var handleFilterDatatable = () => {
                // Select filter options
                filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
                const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

                // Filter datatable on submit
                filterButton.addEventListener('click', function () {
                    // Get filter values
                    let paymentValue = '';

                    // Get payment value
                    filterPayment.forEach(r => {
                        if (r.checked) {
                            paymentValue = r.value;
                        }

                        // Reset payment value if "All" is selected
                        if (paymentValue === 'all') {
                            paymentValue = '';
                        }
                    });

                    // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
                    dt.search(paymentValue).draw();
                });
            }

            // Delete customer
            var handleDeleteRows = () => {
                // Select all delete buttons
                const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

                deleteButtons.forEach(d => {
                    // Delete button on click
                    d.addEventListener('click', function (e) {
                        e.preventDefault();

                        // Select parent row
                        const parent = e.target.closest('tr');

                        // Get customer name
                        const customerName = parent.querySelectorAll('td')[1].innerText;

                        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Are you sure you want to delete " + customerName + "?",
                            icon: "warning",
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then(function (result) {
                            if (result.value) {
                                // Simulate delete request -- for demo purpose only
                                Swal.fire({
                                    text: "Deleting " + customerName,
                                    icon: "info",
                                    buttonsStyling: false,
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function () {
                                    Swal.fire({
                                        text: "You have deleted " + customerName + "!.",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary",
                                        }
                                    }).then(function () {
                                        // delete row data from server and re-draw datatable
                                        dt.draw();
                                    });
                                });
                            } else if (result.dismiss === 'cancel') {
                                Swal.fire({
                                    text: customerName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                });
                            }
                        });
                    })
                });
            }

            // Reset Filter
            var handleResetForm = () => {
                // Select reset button
                const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

                // Reset datatable
                resetButton.addEventListener('click', function () {
                    // Reset payment type
                    filterPayment[0].checked = true;

                    // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
                    dt.search('').draw();
                });
            }

            // Init toggle toolbar
            var initToggleToolbar = function () {
                // Toggle selected action toolbar
                // Select all checkboxes
                const container = document.querySelector('#kt_datatable_example_1');


            }

            // Toggle toolbars
            var toggleToolbars = function () {
                // Define variables
                const container = document.querySelector('#kt_datatable_example_1');
                const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
                const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
                const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

                // Select refreshed checkbox DOM elements
                const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

                // Detect checkboxes state & count
                let checkedState = false;
                let count = 0;

                // Count checked boxes
                allCheckboxes.forEach(c => {
                    if (c.checked) {
                        checkedState = true;
                        count++;
                    }
                });

                // Toggle toolbars
                if (checkedState) {
                    selectedCount.innerHTML = count;
                    toolbarBase.classList.add('d-none');
                    toolbarSelected.classList.remove('d-none');
                } else {
                    toolbarBase.classList.remove('d-none');
                    toolbarSelected.classList.add('d-none');
                }
            }

            // Public methods
            return {
                init: function () {
                    initDatatable();
                    handleSearchDatatable();
                    // initToggleToolbar();
                    // handleFilterDatatable();
                    // handleDeleteRows();
                    // handleResetForm();
                }
            }
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTDatatablesServerSide.init();
        });
    </script>

    <script>
        $(document).on('click', '.campaign_delete', function (e) {
            var dataId = $(this).data('id');

            Swal.fire({
                title: 'Kampanyayı silmek istediğinize emin misiniz?',
                text: 'Uyarı!Kampanya kalıcı olarak silinecektir',
                showCancelButton: true,
                confirmButtonText: 'Sil',
                icon: 'warning',
                cancelButtonText: 'Vazgeç',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Lütfen Bekleyiniz!',
                        text: 'Kampanya Siliniyor',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                    swal.showLoading();

                    $.ajax({
                        type: "POST",
                        url: `${route('campaign.destroy', {id: dataId})}`,
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        cache: false,
                        success: function (response) {
                            Swal.fire({
                                title: response.title,
                                text: response.text,
                                confirmButtonText: response.confirmButtonText,
                                icon: response.icon,
                            }).then((result) => {
                                if (response.status === true) {
                                    location.reload()
                                }
                            });
                        },
                        error: function (response) {
                            console.log(response)
                        }
                    });
                }


            });


        });

        $("#campaign_create_button").click(function (e) {

            var valid = this.form.checkValidity();
            //formun geçerli olup olmadığı kontrol edilir eğer geçerli ise valid değişkeni true yanlışsa false döner
            if (valid) {
                e.preventDefault();//formun varsayılan gönderme davranışını durdurur ???
                Swal.fire({
                    title:"Kampanya Oluşturuluyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('campaign.create') }}',
                    data: $('#campaign_create_form').serialize(),
                    dataType:'JSON',
                    headers:{
                        'X-CSRF-TOKEN':'{{ csrf_token() }}',
                    },
                    cache: false,
                    success: function (response) {
                        Swal.fire({
                            title: response.title,
                            text: response.text,
                            html: response.html,
                            icon: response.icon,
                            confirmButtonText: response.confirmButtonText,
                        }).then((result) => {
                            if (response.success === true) {
                                location.reload()
                            }
                        });
                    },
                    error: function (response) {
                        Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.<br> Hata Kodu: " + response.responseJSON.message, "error");
                    }
                });


            }
        });
        $("#campaign_edit_button").click(function (e) {

            var valid = this.form.checkValidity();

            if (valid) {
                e.preventDefault();
                Swal.fire({
                    title: "Kampanya Düzenleniyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('campaign.update') }}',
                    data: $('#campaign_edit_form').serialize(),
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    cache: false,
                    success: function (response) {
                        Swal.fire({
                            title: response.title,
                            text: response.text,
                            html: response.html,
                            icon: response.icon,
                            confirmButtonText: response.confirmButtonText,
                        }).then((result) => {
                            $("#campaign_datatable").DataTable().draw();
                        });
                    },
                    error: function (response) {
                        Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.<br> Hata Kodu: " + response.responseJSON.message, "error");
                    }
                });


            }
        });

        function campaignEdit(id) {



            Swal.fire({
                title: "Veri Getiriliyor...",
                text: "Lütfen Bekleyin",
                allowOutsideClick: false,
                allowEscapeKey: false,
            });
            swal.showLoading();
            $.ajax({
                type: 'GET',
                url: '{{ route('campaign.edit') }}',
                data: {campaignGET: true, campaignID: id},
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                cache: false,
                success: function (response) {

                    if (response.status === false) {
                        Swal.fire({
                            title: response.title,
                            text: response.text,
                            html: response.html,
                            icon: response.icon,
                            confirmButtonText: response.confirmButtonText,
                        });
                        return false;
                    }

                    var form = document.forms['campaign_edit_form']

                    form.elements['campaignID'].value = response.campaign.id;
                    form.elements['name'].value = response.campaign.name;
                    form.elements['goal_amount'].value = response.campaign.goal_amount;
                    form.elements['summary'].value = response.campaign.summary;
                    form.elements['description'].value = response.campaign.description;
                    form.elements['start_date'].value = moment(response.campaign.start_date).format('DD-MM-YYYY H:mm');
                    form.elements['end_date'].value = moment(response.campaign.end_date).format('DD-MM-YYYY H:mm');
                    form.elements['status'].value = response.campaign.status;



                    Swal.close();
                    $('#campaign_edit_modal').modal('show');

                },
                error: function (response) {
                    Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.<br> Hata Kodu: " + response.responseJSON.message, "error");
                }
            });


        }
    </script>

@endpush

