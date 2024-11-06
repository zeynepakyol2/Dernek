@foreach($subCategories as $subCategory)
    <tr id="category-{{ $subCategory->id }}">
        <td style="text-align: left">
            <a href="{{ route('product.category.detail', $subCategory->slug) }}">
                @for($i=1; $i<=$layer; $i++)— @endfor{{ $subCategory->name }}
            </a>
        </td>
        <td>{{ substr(strip_tags($subCategory->description), 0 , 60) }}</td>
        <td>{{ $subCategory->type == 'category' ? 'Kategori' : 'Marka' }}</td>
{{--        <td><a href="javascript:categoryDelete({{ $subCategory->id }})">SİL</a></td>--}}
        <td>
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
                    <a href="javascript:categoryEdit({{ $subCategory->id }})" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                        Düzenle
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="javascript:categoryDelete({{ $subCategory->id }})" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                        Sil
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
    </tr>
    @if(count($subCategory->subCategory))
        @include('backend.layout.base.products.category_subcategory_table', ['subCategories' => $subCategory->subCategory, 'layer' => $layer+1])
    @endif
@endforeach