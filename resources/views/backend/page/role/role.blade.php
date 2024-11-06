@extends('backend.layout.master')
@section('title', 'Roller')
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
                    Roller</h1>
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
                    <li class="breadcrumb-item text-muted">Roller</li>
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
                    <h3 class="card-title">Roller</h3>

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
                                   placeholder="Rol Ara"/>
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
                            <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#roles_create_modal">Yeni Rol Ekle
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
                    <table id="roles_datatable" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">

                            <th>#</th>
                            <th>Rol Adı</th>
                            <th>Oluşturma Tarihi</th>
                            <th>Güncellenme Tarihi</th>
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
    <div class="modal fade" tabindex="-1" id="roles_create_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Rol Ekle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="roles_create_form">
                    <input type="hidden" name="roleID" >
                    <input type="hidden" name="rolePOST" value="1">
                    <!--begin::Card body-->
                    <div class="modal-body">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Rol Adı</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text"  placeholder="Rol Adı" name="name" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label  class="col-lg-4 col-form-label required fw-semibold fs-6">Yetkiler</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">

                                <select class="form-select" data-kt-select2="true" aria-label="Durum seçin" id="permissions" name="permissions[]" multiple required>
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}" >{{$permission->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                        <button type="submit" class="btn btn-primary" id="roles_create_button">Rol Ekle</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Campaign create modal-->

    <!--begin::Campaign edit modal-->
    <div class="modal fade" tabindex="-1" id="roles_edit_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Rol Düzenle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="roles_edit_form">
                    <input type="hidden" name="roleID" >
                    <input type="hidden" name="rolePOST" value="1">
                    <!--begin::Card body-->
                    <div class="modal-body">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Rol Adı</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label  class="col-lg-4 col-form-label required fw-semibold fs-6">Yetkiler</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">

                                <select class="form-select" data-kt-select2="true" aria-label="Durum seçin" id="permissions_edit" name="permissions[]" multiple required>
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}"  >{{$permission->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                        <button type="submit" class="btn btn-primary" id="roles_edit_button">Değişikliği Kaydet</button>
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
                dt = $("#roles_datatable").DataTable({
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
                        url: '{{ route('roles.list') }}',
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
                    },
                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'created_at'},
                        {data: 'updated_at'},
                       // {data: 'updated_at'},

                        {
                            data: null,
                        }                    ],
                    columnDefs: [


                        {
                            target: -2,
                            render: function (data) {
                                return moment(data).format('DD-MM-YYYY H:mm');
                            }
                        },
                        {
                            target: -3,
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
                <a href="javascript:rolesEdit(`+data.id+`)" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                    Düzenle
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="javascript:rolesDestroy(`+data.id+`)" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                    Sil
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

        $("#roles_create_button").click(function (e) {

            var valid = this.form.checkValidity();
            //formun geçerli olup olmadığı kontrol edilir eğer geçerli ise valid değişkeni true yanlışsa false döner
            if (valid) {
                e.preventDefault();//formun varsayılan gönderme davranışını durdurur ???
                Swal.fire({
                    title: "Rol Oluşturuluyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('roles.create') }}',
                    data: $('#roles_create_form').serialize(),
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
        $("#roles_edit_button").click(function (e) {

            var valid = this.form.checkValidity();

            if (valid) {
                e.preventDefault();
                Swal.fire({
                    title: "Rol Düzenleniyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('roles.update') }}',
                    data: $('#roles_edit_form').serialize(),
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
                            $("#datable").DataTable().draw();
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

        function rolesEdit(id) {



            Swal.fire({
                title: "Veri Getiriliyor...",
                text: "Lütfen Bekleyin",
                allowOutsideClick: false,
                allowEscapeKey: false,
            });
            swal.showLoading();
            $.ajax({
                type: 'GET',
                url: '{{ route('roles.edit') }}',
                data: {roleGET: true, roleID: id},
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

                    var form = document.forms['roles_edit_form']

                    form.elements['roleID'].value = response.role.id;
                     form.elements['name'].value = response.role.name;
                     const permissions = response.permissions.map((item) => item.id)
                    $('#permissions_edit').val(permissions).trigger('change');


                    Swal.close();
                    $('#roles_edit_modal').modal('show');

                },
                error: function (response) {
                    Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.<br> Hata Kodu: " + response.responseJSON.message, "error");
                }
            });


        }
        function rolesDestroy(id) {

            Swal.fire({
                title: 'Bu rolü silmek istediğinize emin misiniz?',
                text: "Bu işlemi geri alamazsınız!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, sil!',
                cancelButtonText: 'İptal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('roles.destroy', ':id') }}'.replace(':id', id),
                        data: {
                            _method: 'DELETE',
                            id: id,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            Swal.fire({
                                title: 'Silindi!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'Tamam'
                            }).then(() => {
                                if (response.success === true) {
                                    location.reload()
                                }
                                $("#datable").DataTable().draw();

                            });
                        },
                        error: function (response) {
                            Swal.fire('Hata!', 'Silme işlemi gerçekleştirilemedi.', 'error');
                        }
                    });
                }
            });
        }

    </script>

@endpush


