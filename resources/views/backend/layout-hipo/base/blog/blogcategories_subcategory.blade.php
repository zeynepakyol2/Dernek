@foreach($subCategories as $subCategory)
    <tr id="category-{{ $subCategory->id }}">
        <td style="text-align: left">
            <a href="{{ route('blog.category.detail', $subCategory->slug) }}">
                @for($i=1; $i<=$layer; $i++)—@endfor {{ $subCategory->title }}
            </a>
        </td>
        <td>{{ substr($subCategory->content, 0 , 60) }}</td>
        <td>{{ $subCategory->slug }}</td>
        <td><a href="javascript:categoryDelete({{ $subCategory->id }})">SİL</a></td>
    </tr>
    @if(count($subCategory->subCategory))
        @include('backend.layout.base.blog.blogcategories_subcategory', ['subCategories' => $subCategory->subCategory, 'layer' => $layer+1])
    @endif
@endforeach