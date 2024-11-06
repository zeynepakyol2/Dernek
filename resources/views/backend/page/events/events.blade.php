@extends('backend.layout.master')

@section('title', 'Etkinlikler')

@push('styles')
@endpush

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Etkinlikler</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Etkinlikler</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#events_create_modal">Yeni Etkinlik Ekle</button>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Etkinlikler</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-rounded table-striped border gy-7 gs-7">
                            <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>ID</th>
                                <th>Adı</th>
                                <th>Açıklama</th>
                                <th>Tarih</th>
                                <th>Konum</th>
                                <th>Aktiflik</th>
                                <th>Detay</th>
                                <th>Kategori</th>
                                <th>Saat</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($events as $index => $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->event_date }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->status }}</td>
                                    <td>{{ $event->details }}</td>
                                    <td>{{ $event->category }}</td>
                                    <td>{{ $event->event_time }}</td>
                                    <td><a href="javascript:eventEdit({{ $event->id }})" class="btn btn-primary" data-user-id="{{ $event->id }}">Düzenle</a></td>
                                    <td>
                                        <button type="submit" data-id="{{ $event->id }}" class="btn btn-danger events_delete">Sil</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" style="text-align: center;">Kayıtlı veri bulunamadı...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!--begin::Events create modal-->
    <div class="modal fade" tabindex="-1" id="events_create_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Yeni Etkinlik Ekle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="events_create_form">

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Etkinlik Adı</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Açıklaması</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
{{--                        <div class="row mb-6">--}}
{{--                            <!--begin::Label-->--}}
{{--                            <label class="col-lg-4 col-form-label fw-semibold fs-6">--}}
{{--                                <span class="required">Tarihi</span>--}}
{{--                                <span class="ms-1" data-bs-toggle="tooltip" >--}}
{{--                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">--}}
{{--                                            </i>--}}
{{--                                        </span>--}}
{{--                            </label>--}}
{{--                            <!--end::Label-->--}}
{{--                            <!--begin::Col-->--}}
{{--                            <div class="col-lg-8 fv-row">--}}
{{--                                <input type="date" name="event_date" class="form-control form-control-lg form-control-solid" required  />--}}
{{--                            </div>--}}
{{--                            <!--end::Col-->--}}
{{--                        </div>--}}
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Konumu</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="location" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Detayları</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="details" class="form-control form-control-lg form-control-solid" required />
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
                                    <option value="0" >Pasif</option>

                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kategori</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="category" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Saat</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="time" name="event_time" class="form-control form-control-lg form-control-solid" required />
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                        <button type="submit" class="btn btn-primary" id="events_create_button">Etkinliği Kaydet</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Events create modal-->

    <!--begin::Events edit modal-->
    <div class="modal fade" tabindex="-1" id="events_edit_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Etkinlik Düzenle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <!--begin::Form-->
                <form class="form" id="events_edit_form" >
                    <input type="hidden" name="eventsID" >
                    <input type="hidden" name="eventsPOST" value="1">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Etkinlik Adı</label>
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
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Açıklaması</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
{{--                        <div class="row mb-6">--}}
{{--                            <!--begin::Label-->--}}
{{--                            <label class="col-lg-4 col-form-label fw-semibold fs-6">--}}
{{--                                <span class="required">Tarihi</span>--}}
{{--                                <span class="ms-1" data-bs-toggle="tooltip" >--}}
{{--                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">--}}

{{--                                            </i>--}}
{{--                                        </span>--}}
{{--                            </label>--}}
{{--                            <!--end::Label-->--}}
{{--                            <!--begin::Col-->--}}
{{--                            <div class="col-lg-8 fv-row">--}}
{{--                                <input type="text" name="event_date" class="form-control form-control-lg form-control-solid" required />--}}
{{--                            </div>--}}
{{--                            <!--end::Col-->--}}
{{--                        </div>--}}
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Konumu</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="location" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Detayları</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="details" class="form-control form-control-lg form-control-solid" required/>
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
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kategori</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="category" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Saat</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="event_time" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                        <button type="submit" class="btn btn-primary" id="events_edit_button">Değişikliği Kaydet</button>
                    </div>
                    <!--end::Actions-->
                </form>f
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Events edit modal-->


@push('scripts')
    <script>
        $(document).on('click','.events_delete',function (e){
            var dataId=$(this).data('id');

            Swal.fire({
                title:'Etkinliği silmek istediğinize emin misiniz?',
                text:'Uyarı!Etkinlik kalıcı olarak silinecektir',
                showCancelButton:true,
                confirmButtonText:'Sil',
                icon:'warning',
                cancelButtonText:'Vazgeç',
            }).then((result)=>{
                if(result.isConfirmed){
                    Swal.fire({
                        title:'Lütfen Bekleyiniz!',
                        text:'Etkinlik Siliniyor',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                    swal.showLoading();

                    $.ajax({
                        type:"POST",
                        url:`${ route ('events.destroy',{id:dataId} )}`,
                        dataType:'JSON',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        cache: false,
                        success:function (response){
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
        $("#events_create_button").click(function (e) {

            var valid = this.form.checkValidity();
            //formun geçerli olup olmadığı kontrol edilir eğer geçerli ise valid değişkeni true yanlışsa false döner
            if (valid) {
                e.preventDefault();//formun varsayılan gönderme davranışını durdurur ???
                Swal.fire({
                    title: "Etkinlik Oluşturuluyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('events.create') }}',
                    data: $('#events_create_form').serialize(),
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    cache:false,
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
        $("#events_edit_button").click(function (e) {

            var valid = this.form.checkValidity();

            if (valid) {
                e.preventDefault();
                Swal.fire({
                    title: "Etkinlik Düzenleniyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                Swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('events.update') }}',
                    data: $('#events_edit_form').serialize(),
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    cache:false,
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
                                $('#modal').modal('hide');
                            }
                        });
                    },
                    error: function (response) {
                        console.log(response);
                        Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.");
                    }
                });


            }
        });
        function eventEdit(id) {

            Swal.fire({
                title: "Veri Getiriliyor...",
                text: "Lütfen Bekleyin",
                allowOutsideClick: false,
                allowEscapeKey: false,
            });
            Swal.showLoading();
            $.ajax({
                type: 'GET',
                url: '{{ route('events.edit') }}',
                data: {eventsGET: true, eventsID: id},
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                cache:false,
                success: function (response) {
                    console.log(response);
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

                    var form = document.forms['events_edit_form']

                    form.elements['eventsID'].value = response.event.id;
                    form.elements['name'].value = response.event.name;
                    form.elements['description'].value = response.event.description;
                   // form.elements['event_date'].value = response.event.event_date;
                    form.elements['location'].value =  response.event.location;
                    form.elements['details'].value = response.event.details;
                    form.elements['status'].value = response.event.status;
                    form.elements['category'].value = response.event.category;
                    form.elements['event_time'].value = response.event.event_time;

                    Swal.close();
                    $('#events_edit_modal').modal('show');
                },
                error: function (response) {
                    Swal.fire("Üzgünüm", "İşleminiz tamamlanamadı.<br> Hata Kodu: " + response.responseJSON.message, "error");
                }
            });


        }
    </script>

@endpush

