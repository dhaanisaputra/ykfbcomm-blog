<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="back/zenblog/img/logo.png" alt=""> -->
            <img loading="prelaod" decoding="async" class="img-fluid"
                src="{{ url('/back/dist/img/logo-favicon/' . blogInfo()->blog_favicon) }}"
                alt="{{ blogInfo()->blog_name }}" style="max-width: 480px">
        </a>

        {{-- <nav id="navbar" class="navbar">
            <ul>
                @php
                    $getCateg = App\Models\Category::whereHas('subcategories', function ($q) {
                        $q->whereHas('posts');
                    })->get();
                @endphp
                @foreach ($getCateg as $category)
                    <li class="dropdown">
                        <a href="#" role="button">
                            {{ $category->category_name }}
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            @php
                                $getSubCateg = App\Models\SubCategory::where('parent_category', $category->id)
                                    ->whereHas('posts')
                                    ->orderBy('subcategory_name', 'asc')
                                    ->get();
                            @endphp
                            @foreach ($getSubCateg as $subcategory)
                                <a class="dropdown-item"
                                    href="{{ route('category_posts', $subcategory->slug) }}">{{ $subcategory->subcategory_name }}</a>
                            @endforeach
                        </ul>
                    </li>
                @endforeach

                <li>
                    <a href="{{ route('community') }}">Community</a>
                </li>

                <li>
                    <a href="{{ route('foty-idn') }}">FoTY</a>
                </li>

                <li><a href="{{ route('about-me') }}">About</a></li>
            </ul>
        </nav><!-- .navbar --> --}}
        <nav id="navbar" class="navbar">
            <ul>
                @php
                    $getCateg = App\Models\Category::whereHas('subcategories', function ($q) {
                        $q->whereHas('posts');
                    })->get();
                @endphp

                @foreach ($getCateg as $category)
                    @php
                        $getSubCateg = App\Models\SubCategory::where('parent_category', $category->id)
                            ->whereHas('posts', function ($query) {
                                $query->where('status_post', 1);
                            })
                            ->orderBy('subcategory_name', 'asc')
                            ->get();
                    @endphp

                    @if ($getSubCateg->count() === 1)
                        <!-- If there's only one subcategory, display it as a main menu item -->
                        <li>
                            <a href="{{ route('category_posts', $getSubCateg->first()->slug) }}">
                                {{ $getSubCateg->first()->subcategory_name }}
                            </a>
                        </li>
                    @else
                        <!-- If there are multiple subcategories, display them under the parent category -->
                        <li class="dropdown">
                            <a href="#" role="button">
                                {{ $category->category_name }}
                                <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>
                            <ul>
                                @foreach ($getSubCateg as $subcategory)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('category_posts', $subcategory->slug) }}">
                                            {{ $subcategory->subcategory_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

                <!-- Additional static menu items -->
                <li>
                    <a href="{{ route('community') }}">Community</a>
                </li>

                <li>
                    <a href="{{ route('foty-idn') }}">FoTY</a>
                </li>

                <li><a href="{{ route('calendar-events') }}">Calendar Events</a></li>
                <li><a href="{{ route('about-me') }}">About</a></li>
            </ul>
        </nav>

        <div class="position-relative">
            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="{{ route('search_posts') }}" method="GET" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" name="query" placeholder="Search" value="{{ Request('query') }}"
                        class="form-control">
                    <button type="button" class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div>
            <!-- End Search Form -->

        </div>
    </div>

</header><!-- End Header -->
