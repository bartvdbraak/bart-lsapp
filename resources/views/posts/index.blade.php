@extends('layouts.app')
@section('title', ' | Blog')
@section('content')
    <h1>All Posts</h1>

    @if(count($posts) > 0)

        @foreach($posts as $post)


            <div class="card m-md-2">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="/posts/{{$post->id}}">
                            <img style="width: 300px;" class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-4">
                            <h4 class="card-title pt-3">{{$post->title}}</h4>
                            <p class="card-text">{{ str_limit(strip_tags($post->body), $limit = 200, $end = '...') }}</p>
                            <a href="/posts/{{$post->id}}" class="btn btn-outline-secondary align-self-end">View post</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer w-100 text-muted">
                    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                </div>

            </div>

        @endforeach


        {{$posts->links()}}
    @else
        <p>No posts were found.</p>
    @endif
@endsection
