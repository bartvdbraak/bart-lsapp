@extends('layouts.app')
@section('title', ' | Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome back {{ Auth::user()->name }}</h3>
                    <p>You are now logged in!</p>

                        <hr class="mb-3 mt-4">
                    @if(count($posts) > 0)

                        <h3>Your posts</h3>


                    <table class="table table-striped">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Date Created</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td ><img style="height: 36px; border-radius: 10%;" src="/storage/cover_images/{{$post->cover_image}}" alt=""></td>
                                <td class="align-middle">{{$post->title}}</td>
                                <td class="align-middle">{{$post->created_at}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach

                    </table>
                    @else

                            <p>You have no current posts.</p>

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
