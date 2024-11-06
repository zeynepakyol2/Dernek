@foreach($subCategories as $subCategory)
    <option style="margin-left: 15px;"
            {{ isset($blog) ? ($subCategory->id == $blog->category_id ? 'selected' : null) : null }}
            value="{{ $subCategory->id }}">@for($i=1; $i<=$layer; $i++)— @endfor{{  $subCategory->title }}</option>
    @if(count($subCategory->subCategory))
        @include('backend.layout.base.products.product_subcategory', ['subCategories' => $subCategory->subCategory, 'layer' => $layer+1])
    @endif
@endforeach