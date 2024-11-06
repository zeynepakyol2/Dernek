@foreach($subCategories as $subCategory)
    <option style="margin-left: 15px;"
            {{ isset($category) ? ($subCategory->id == $category->category_id ? 'selected' : null) : null }}
            value="{{ $subCategory->id }}">@for($i=1; $i<=$layer; $i++)— @endfor{{  $subCategory->name }}</option>
    @if(count($subCategory->subCategory))
        @include('backend.layout.base.products.product_subcategory', ['subCategories' => $subCategory->subCategory, 'layer' => $layer+1])
    @endif
@endforeach