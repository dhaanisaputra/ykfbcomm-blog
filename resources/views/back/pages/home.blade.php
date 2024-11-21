@extends('back.layout.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Home')
@section('content')

    <div class="page-header">
        <h1 class="page-title" style="font: sans-serif">
            Selamat Datang di Dashboard<br>
            Yogyakarta Fingerboard Community Blog
        </h1>
    </div>

    <div class="row row-cards mt-4">
        <div class="col-sm-6 col-lg-3">
            <div class="card p-2" style="display:grid; grid-template-columns: auto 1fr; overflow: hidden; gap: 10px;">
                <span class=" mr-3"
                    style="background-color: rgb(36, 36, 125); display:grid; place-items: center; aspect-ratio: 1;">
                    <i class="fas fa-user-check fa-md" style="color: white"></i>
                </span>
                <div>
                    <h4 class="m-0"><a href="{{ route('author.authors') }}">{{ $authorStats->total }}
                            <small>Author</small></a>
                    </h4>
                    <small class="text-muted">{{ $authorStats->active }} Active</small>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-2" style="display:grid; grid-template-columns: auto 1fr; overflow: hidden; gap: 10px;">
                <span class=" mr-3"
                    style="background-color: rgb(46, 185, 71); display:grid; place-items: center; aspect-ratio: 1;">
                    <i class="fas fa-newspaper fa-md" style="color: white"></i>
                </span>
                <div>
                    <h4 class="m-0"><a href="{{ route('author.posts.all-post') }}">{{ $postStats->total }} <small>Posts
                                Content</small></a></h4>
                    <small class="text-muted">{{ $postStats->active }} Active</small>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-2" style="display:grid; grid-template-columns: auto 1fr; overflow: hidden; gap: 10px;">
                <span class=" mr-3"
                    style="background-color: rgb(225, 60, 31); display:grid; place-items: center; aspect-ratio: 1;">
                    <i class="fas fa-users fa-md" style="color: white"></i>
                </span>
                <div>
                    <h4 class="m-0"><a href="{{ route('author.posts.all-community') }}">{{ $communityStats->total }}
                            <small>Members
                                Community</small></a></h4>
                    <small class="text-muted">{{ $communityStats->active }} Registered</small>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-2" style="display:grid; grid-template-columns: auto 1fr; overflow: hidden; gap: 10px;">
                <span class=" mr-3"
                    style="background-color: rgb(182, 112, 31); display:grid; place-items: center; aspect-ratio: 1;">
                    <i class="fas fa-award fa-md" style="color: white"></i>
                </span>
                <div>
                    <h4 class="m-0"><a href="{{ route('author.posts.all-foty') }}">{{ $fotyStats->total }}
                            <small>FoTY</small></a></h4>
                    <small class="text-muted">{{ $fotyStats->active }} Active</small>
                </div>
            </div>
        </div>
    </div>

@endsection
