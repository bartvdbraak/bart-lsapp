@extends('layouts.app')
@section('title', ' | '.$post->title)

@section('content')

    <div class="row">
        <div class="col-12 col-md-4">
            <a href="javascript:history.back()" class="btn btn-outline-dark mb-3">Go back</a>
            <img class="img-fluid rounded"  src="/storage/cover_images/{{$post->cover_image}}" alt="">
            <hr>
            <strong class="d-inline-block mb-2">Category: </strong>
            <strong style="color: {{ $post->category['color'] }};" class="d-inline-block mb-2">{{ $post->category['name'] }}</strong>
            <hr>
            <small>Written on {{$post->created_at}} by <b>{{ $post->user->name }}</b></small>
            <hr>
            @if(!Auth::guest())
                @if($post->user_id == Auth::user()->id)
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit post</a>
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete post', ['class' => 'btn btn-danger '])}}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
        <div class="col-12 col-md-8">
            <h1>{{$post->title}}</h1>
            <div>{!! $post->body !!}</div>
        </div>
    </div>

@endsection
