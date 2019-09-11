@extends('layouts.app')
@section('title', ' | Home')
@section('content')
    <div style="background-image: url(storage/images/built.jpg); background-size: cover;" class="jumbotron text-center text-light">
        <h1>Hello World</h1>
        <p>This is my new Laravel application. I made it for experimentation and learning new paradigms.</p>
        <p class="align-self-end">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>

@endsection

