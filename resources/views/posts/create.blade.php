@extends('layouts.app')
@section('title', ' | New post')

@section('content')
    <h1>Create a new post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'id' => 'editor', 'height' => '300px'])}}
        </div>
        <div class="form-group ">
            {{Form::label('cover_image', 'Cover Image (max. size 1.999MB): ')}}
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('extra-js')
    <script src="{!! mix('js/ckeditor.js') !!}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );


    </script>
@endsection
