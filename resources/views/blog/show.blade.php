@extends('layouts.base')

@section('title', $post->title)

@section('content')
    <div class="container">
        <h3 class="my-5">{{$post->title}}</h3>
        <p>{{$post->content}}</p>


        <hr>

        <a href="{{route('blog')}}">back</a>
    </div>
@endsection