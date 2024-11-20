@foreach (categories() as $item)
    <li><a href="{{ route('category_posts', $item->slug) }}">{!! Str::ucfirst(words($item->subcategory_name)) !!}<span class="ml-auto">
                ({{ $item->posts->where('status_post', 1)->count() }})
            </span></a>
    </li>
@endforeach
