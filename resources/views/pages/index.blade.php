@extends('layouts.app')
@section('title', ' | Home')
@section('content')

    <div class="jumbotron  text-light" style="background-image: url(storage/images/built.jpg); background-size: cover;" >
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <span class="bg-dark">This is my new Laravel application. I made it for experimentation and learning new paradigms.</span>
            <p class="mt-3"><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    @if(count($posts) == 2)

            <div class="row mb-2">
                @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Category</strong>
                            <h3 class="mb-0">{{$post->title}}</h3>
                            <div class="mb-1 text-muted">
                                {!! date('M d', strtotime($post->created_at)); !!}
                            </div>
                            <p class="card-text mb-auto">{{ str_limit( preg_replace('#<[^>]+>#', ' ', $post->body) , $limit = 76, $end = '...') }}</p>
                            <a href="/posts/{{$post->id}}" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <image xlink:href="/storage/cover_images/{{$post->cover_image}}" x="-50%" y="0" height="100%" width="auto"/>
                            </svg>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

    @endif

@endsection

