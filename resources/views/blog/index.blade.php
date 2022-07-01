@extends('layouts.base')

@section('title', 'Блог')

@section('content')
    <div class="container">
        <h3 class="my-5">Блог</h3>

        @foreach($posts as $post)
            <h4>
                <a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a>
            </h4>
            <p>{{$post->content}}</p>
            <hr>
        @endforeach

    </div>
@endsection