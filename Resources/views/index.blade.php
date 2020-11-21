@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}


    </p>
    @foreach ($posts as $post)
        <h4>{{$post->title}} | {{$post->author}}</h4>
    @endforeach
@endsection
