<div class="card mb-9">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                <img class="mw-50px mw-lg-75px" src="/img/user/{{ $user->avatar }}" alt="image" />
            </div>
            <!--end::Image-->
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::Details-->
                    <div class="d-flex flex-column">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center mb-1">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $user->first_name }} {{ $user->last_name }}</a>
                            <span class="badge badge-light-success me-auto">In Progress</span>
                        </div>
                        <!--end::Status-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">
                            @foreach($user->roles as $role)
                                <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>{{ __("roles.". $role->name) }}
                                </span>
                            @endforeach
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>{{ $user->email }}</a>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Actions-->
                    <div class="d-flex mb-4">
                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#hp_modal_amount_charge">Bakiye Ekle/Çıkart</a>
                        <!--begin::Menu-->
                        <div class="me-0">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Head-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap justify-content-start">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-wallet fs-3 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="fs-2 fw-bold" data-kt-countup-decimal-places="2" data-kt-countup="true"
                                     data-kt-countup-value="{{ $user->amount }}" data-kt-countup-suffix=" TL">0
                                </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Bakiye</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-wallet fs-3 text-info me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="fs-2 fw-bold" data-kt-countup-decimal-places="2" data-kt-countup="true"
                                     data-kt-countup-value="{{ $user->withdrawable }}" data-kt-countup-suffix=" TL">0
                                </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Çekilebilir Bakiye</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-wallet fs-3 text-primary me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="fs-2 fw-bold" data-kt-countup-decimal-places="2" data-kt-countup="true"
                                     data-kt-countup-value="{{ $user->spend }}" data-kt-countup-suffix=" TL">0
                                </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Toplam Sipariş</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-cart fs-3 text-danger me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                     data-kt-countup-value="{{ $user->orders->count() }}" data-kt-countup-suffix=" Adt.">0
                                </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Toplam Sipariş</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $user->donations()->count() }}"
                                     data-kt-countup-suffix=" Adt.">0
                                </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Gönderilen Bağış</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Users-->
{{--                    <div class="symbol-group symbol-hover mb-3">--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">--}}
{{--                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">--}}
{{--                            <img alt="Pic" src="/backend/assets/media/avatars/300-11.jpg" />--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">--}}
{{--                            <img alt="Pic" src="/backend/assets/media/avatars/300-7.jpg" />--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">--}}
{{--                            <img alt="Pic" src="/backend/assets/media/avatars/300-20.jpg" />--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">--}}
{{--                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">--}}
{{--                            <img alt="Pic" src="/backend/assets/media/avatars/300-2.jpg" />--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">--}}
{{--                            <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::User-->--}}
{{--                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">--}}
{{--                            <img alt="Pic" src="/backend/assets/media/avatars/300-12.jpg" />--}}
{{--                        </div>--}}
{{--                        <!--end::User-->--}}
{{--                        <!--begin::All users-->--}}
{{--                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">--}}
{{--                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>--}}
{{--                        </a>--}}
{{--                        <!--end::All users-->--}}
{{--                    </div>--}}
                    <!--end::Users-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
        <div class="separator"></div>
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6" href="#">Hesap Özeti</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6  {{ request()->route()->named('admin.user.edit') ? 'active' : null }}"
                   href="{{ route('admin.user.edit', ['id' => $user->id]) }}">Ayarlar</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ request()->route()->named('admin.user.payments') ? 'active' : null }}"
                   href="{{ route('admin.user.payments', ['id' => $user->id]) }}">Ödemeler</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6" href="#">Güvenlik</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6" href="#">Aktivite</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6" href="#">Faturalandırma</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6" href="#">API Anahtarları</a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--end::Nav-->
    </div>
</div>

<div class="modal fade" tabindex="-1" id="hp_modal_amount_charge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHeader">Bakiye Ekleme</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                     aria-label="Close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                  transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                  transform="rotate(45 7.41422 6)" fill="black"></rect>
                                        </svg>
                                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>

            <form action="{{ route('admin.user.action') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-2">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label fw-bold fs-6">
                            <span>Bakiye Tipi</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                               title=""
                               data-bs-original-title="Bakiye türü önemlidir"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10 fv-row">
                            <input type="text" name="type" required
                                   class="form-control form-control-lg form-control-solid"
                                   value="Cari Giriş [EFT]"
                                   placeholder="Cari Giriş [Çekiliş]">
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-2">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label fw-bold fs-6">
                            <span>Bakiye Açıklaması</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10 fv-row">
                            <input type="text" name="description"
                                   class="form-control form-control-lg form-control-solid mt-2"
                                   placeholder="Sipariş No: 123">
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-6 fv-row">
                            <label class="required form-label">Bakiye Girişi</label>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                               data-bs-original-title="Mevcut bakiyenin üzerine eklenecek tutarı giriniz."></i>
                            <input type="number" name="inflow" min="0" value="0" step=".01"
                                   class="form-control form-control-solid"
                                   placeholder="Eklenecek bakiye"/>
                        </div>
                        <div class="col-lg-6 fv-row">
                            <label class="required form-label">
                                Bakiye Çıkışı
                            </label>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                               data-bs-original-title="Mevcut bakiyeden çıkartılacak tutarı giriniz."></i>
                            <input type="number" name="outflow" min="0" value="0" step=".01"
                                   class="form-control form-control-solid"
                                   placeholder="Azaltılacak bakiye"/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 fv-row">
                        </div>
                        <div class="col-lg-6 fv-row">
                            <label class="required form-label">Güncel Çekilebilir Bakiye</label>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                               data-bs-original-title="Olması gereken bakiyeyi giriniz."></i>
                            <input type="number" name="withdrawable" min="0"  step=".01"
                                   value="{{ $user->withdrawable }}"
                                   class="form-control form-control-solid"
                                   placeholder="Olması gereken tutarı girin"/>
                        </div>

                    </div>
                </div>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="amountAddRemove" value="1">
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>

                    <button type="submit" id="submit_button" value="save" class="btn btn-primary">
                        Bakiye Ekle/Çıkart
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>