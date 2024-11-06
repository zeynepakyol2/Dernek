@extends('backend.layout.master')
@section('title', 'Kampanyalar')
@push('styles')
@endpush

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Kampanyalar</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Görterge Paneli</a>
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
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"  data-bs-target="#campaign_create_modal">Yeni Kampanya Ekle</button>
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
                    <div class="table-responsive">
                        <table class="table table-rounded table-striped border gy-7 gs-7">
                            <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>ID</th>
                                <th>Adı</th>
                                <th>Hedef</th>
                                <th>Özet</th>
                                <th>Açıklama</th>
                                <th>Başlangıç Tarihi</th>
                                <th>Bitiş Tarihi</th>
                                <th>Aktiflik</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($campaign as $index => $campaignitem)
                                <tr>
                                    <td>{{ $campaignitem->id }}</td>
                                    <td>{{ $campaignitem->name }}</td>
                                    <td>{{ $campaignitem->goal_amount }}</td>
                                    <td>{{ $campaignitem->summary }}</td>
                                    <td>{{ $campaignitem->description }}</td>
                                    <td>{{ $campaignitem->start_date}}</td>
                                    <td>{{ $campaignitem->end_date }}</td>
                                    <td>{{ $campaignitem->status }}</td>
                                    <td><a href="{{ route('campaign.edit', ['id' => $campaignitem->id]) }}" class="btn btn-primary">Düzenle</a></td>
                                    <td>
{{--                                        <form action="{{ route('campaign.destroy', ['id' => $campaignitem->id]) }}" method="POST" style="display:inline;"  onsubmit="return confirm('Bu ürünü silmek istediğinizden emin misiniz?');">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                        </form>--}}
                                        <button type="submit" data-id="{{ $campaignitem->id }}" class="btn btn-danger campaign_delete" >Sil</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center;">Kayıtlı veri bulunamadı...</td>
                                </tr>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
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
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Kampanya Adı" required/>
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
                                <input type="number" name="goal_amount" class="form-control form-control-lg form-control-solid"
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
                                <span class="ms-1" data-bs-toggle="tooltip" >
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                            </label>
                            <!--end::Label-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="summary" class="form-control form-control-lg form-control-solid" required placeholder="Kampanya Özeti" />
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
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" required placeholder="Kampanya Açıklaması" />
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
                                <input type="date" name="start_date" class="form-control form-control-lg form-control-solid" placeholder="Başlangıç Tarihi" required />
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
                                <input type="date" name="end_date" class="form-control form-control-lg form-control-solid" placeholder="Bitiş Tarihi" />
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
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light btn-active-light-primary me-2">Kapat</button>
                        <button type="submit" class="btn btn-primary" id="campaign_create_button">Yeni Kampanya Ekle</button>
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
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid" required value="{{ $campaignitem->name }}"/>
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
                                <input type="text" name="goal_amount" class="form-control form-control-lg form-control-solid" required value="{{ $campaignitem->goal_amount }}"/>
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
                                <input type="text" name="summary" class="form-control form-control-lg form-control-solid"  required value="{{ $campaignitem->summary}}" />
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
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" required value="{{ $campaignitem->description }}"/>
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
                                <input type="text" name="start_date" class="form-control form-control-lg form-control-solid" required value="{{ $campaignitem->start_date }}"/>
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
                                <input type="text" name="end_date" class="form-control form-control-lg form-control-solid" required value="{{ $campaignitem->end_date }}"/>
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
                                    <option value="1" {{ $campaignitem->status == 1 ? 'selected' : ''}}>Aktif</option>
                                    <option value="0" {{ $campaignitem->status == 0 ? 'selected' : '' }}>Pasif</option>

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
<script>
        $(document).on('click','.campaign_delete',function (e){
            var dataId=$(this).data('id');

            Swal.fire({
                title:'Kampanyayı silmek istediğinize emin misiniz?',
                text:'Uyarı!Kampanya kalıcı olarak silinecektir',
                showCancelButton:true,
                confirmButtonText:'Sil',
                icon:'warning',
                cancelButtonText:'Vazgeç',
            }).then((result)=>{
                if(result.isConfirmed){
                    Swal.fire({
                        title:'Lütfen Bekleyiniz!',
                        text:'Kampanya Siliniyor',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                    swal.showLoading();

                    $.ajax({
                        type:"POST",
                        url:`${ route ('campaign.destroy',{id:dataId} )}`,
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

        $("#campaign_create_button").click(function (e) {

            var valid = this.form.checkValidity();
            //formun geçerli olup olmadığı kontrol edilir eğer geçerli ise valid değişkeni true yanlışsa false döner
            if (valid) {
                e.preventDefault();//formun varsayılan gönderme davranışını durdurur ???
                Swal.fire({
                    title: "Kampanya Oluşturuluyor...",
                    text: "Lütfen Bekleyin",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('campaign.create') }}',
                    data: $('#campaign_create_form').serialize(),
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
                    url: '{{ route('campaign.edit') }}',
                    data: $('#campaign_edit_form').serialize(),
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
        function campaignEdit(id) {

            Swal.fire({
                title: "Veri Getiriliyor...",
                text: "Lütfen Bekleyin",
                allowOutsideClick: false,
                allowEscapeKey: false,
            });
            swal.showLoading();
            $.ajax({
                type: 'POST',
                url: '{{ route('campaign.edit') }}',
                data: {campaignGET: true, campaignID: id},
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                cache:false,
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
                    form.elements['descripton'].value = response.campaign.description;
                    form.elements['start_date'].value = response.campaign.start_date;
                    form.elements['end_date'].value = response.campaign.end_date;
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

