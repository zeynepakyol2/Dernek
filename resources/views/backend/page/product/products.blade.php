@extends('backend.layout.master')
@section('title', 'Ürünler')
@push('styles')



@endpush

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Ürünler</h1>
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
                    <li class="breadcrumb-item text-muted">Ürünler</li>
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
                <a href="{{ route('products.create') }}" class="btn btn-sm fw-bold btn-primary">Yeni Ürün Ekle</a>
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
                    <h3 class="card-title">Ürünler</h3>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-rounded table-striped border gy-7 gs-7">
                            <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>ID</th>
                                <th>Adı</th>
                                <th>Fiyatı</th>
                                <th>Ürün Açıklaması</th>
                                <th>Kayıt Tarihi</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($products as $index => $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-primary">Düzenle</a></td>
                                    <td>
{{--                                        <form action={{ route('product.destroy', ['id' => $product->id]) }} method="POST" style="display:inline;"  onsubmit="return confirm('Bu ürünü silmek istediğinizden emin misiniz?');">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger" >Sil</button>--}}
{{--                                        </form>--}}

                                        <button type="button"  data-id="{{ $product->id }}" class="btn btn-danger product_delete" >Sil</button>
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
@endsection
@push('scripts')

    <script>


        $(document).on('click', '.product_delete', function(e) {
            var dataId = $(this).data('id');

            Swal.fire({
                title: 'Ürünü silmek istediğine emin misin?',
                text: 'Uyarı! Ürün kalıcı olarak silinecektir',
                showCancelButton: true,
                confirmButtonText: 'Sil',
                icon: 'warning',
                cancelButtonText: `Vazgeç`,
            }).then((result) => {

                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Lütfen Bekleyin!",
                        text: "Ürün siliniyor",
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                    Swal.showLoading();

                    $.ajax({
                        type: "POST",
                        url: `${ route('product.destroy', {id:dataId} ) }`,
                        data: {
                            // 'gonderilen-data': 22
                        },
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

    </script>
@endpush
