@extends('layouts.frontend')

@section('content')

    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Search results: {{ $query }}</h1>
        </div>
    </div>

    <div class="container">
        <div class="row medium-padding120">
            <main class="main">
                <div class="row">
                    <div class="case-item-wrap">
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <a href="{{ route('post.single', ['slug' => $post->slug ]) }}">
                                            <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                                <img src="{{ $post->featured }}" alt="Post Image">
                                            </div>
                                        </a>
                                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}">
                                            <h6 class="case-item__title">{{ $post->title }}</h6>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center">No posts matched your search...
                                <a href="{{ route('post.create') }}">Create one!</a>
                            </p>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
