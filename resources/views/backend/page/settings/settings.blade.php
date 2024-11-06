@extends('backend.layout.master')
@section('title', 'Site Ayarları')

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Site
                    Ayarları</h1>
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
                    <li class="breadcrumb-item text-muted">Site Ayarları</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">


            <div class="card shadow-sm">
                <form action="{{ route('admin.settings') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Site Ayarları</h3>

                    </div>

                    <div class="card-body">


                        <div class="row">
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" id="site_name" name="site_name" required
                                         placeholder=""  value="{{ setting('site_name') }}"/>
                                    <label for="site_name">Site Adı</label>
                                </div>
                                <!--end::Input group-->

                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="email" class="form-control" id="site_email" name="site_email" required
                                            placeholder="Bir e-posta adresi giriniz" value="{{ setting('site_email') }}"/>
                                    <label for="site_email">Site E-posta Adresi</label>
                                </div>
                                <!--end::Input group-->
                            </div>


                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" id="address" name="site_address" placeholder="Adres"
                                           value="{{ setting('site_address') }}"/>
                                    <label for="address">Adres</label>
                                </div>
                                <!--end::Input group-->
                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="url" class="form-control" id="harita" name="google_map_url" placeholder="Google Harita URL"
                                           value="{{ setting('google_map_url') }}"/>
                                    <label for="address">Google Harita URL</label>
                                </div>
                                <!--end::Input group-->
                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" id="site_telephone" name="site_telephone" placeholder="Telefon"
                                           value="{{ setting('site_telephone') }}"/>
                                    <label for="address">Telefon</label>
                                </div>
                                <!--end::Input group-->
                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Açıklama"
                                           value="{{ setting('description') }}"/>
                                    <label for="address">Açıklama</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" id="working_hour" name="working_hour" placeholder="Çalışma Saatleri"
                                           value="{{ setting('working_hour') }}"/>
                                    <label for="address">Çalışma Saatleri</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--begin::Example-->
                        <div class="separator separator-dotted separator-content border-dark my-15"><span class="h2">Sosyal Medya Hesapları</span></div>
                        <!--end::Example-->


                        <div class="row">
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="url" class="form-control" id="facebook" name="facebook" placeholder=""
                                           value="{{ setting('social.facebook') }}"/>
                                    <label for="facebook">Facebook URL</label>
                                </div>
                                <!--end::Input group-->

                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="url" class="form-control" id="instagram" name="instagram" placeholder=""
                                           value="{{ setting('social.instagram') }}"/>
                                    <label for="instagram">İnstagram URL</label>
                                </div>
                                <!--end::Input group-->
                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="url" class="form-control" id="x" name="x" placeholder=""
                                           value="{{ setting('social.x') }}"/>
                                    <label for="x">X URL</label>
                                </div>
                                <!--end::Input group-->

                            </div>

                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder=""
                                           value="{{ setting('social.linkedin') }}"/>
                                    <label for="linkedin">Linkedin URL</label>
                                </div>
                                <!--end::Input group-->
                            </div>

                        </div>
                        <div class="mb-10">

                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Değişikliği Kaydet</button>
                    </div>
                </form>
            </div>


        </div>
        <!--end::Content container-->
    </div>
@endsection
