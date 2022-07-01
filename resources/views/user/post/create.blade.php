@extends('layouts.base')

@section('title', 'Create post')

@section('content')
    
    <div class="container">
        <h2 class="my-3">Create post</h2>
        <div class="row">
            <div class="col-4">
                <form action="{{route('user.posts.store')}}" method="POST">
                    @csrf
                    <input type="text" class="my-3 form-control" placeholder="Post title" name="title" autofocus>

                    <textarea name="content" id="" cols="30" rows="5" class="form-control" placeholder="Post content"></textarea>
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            </div>

        </div>
    </div>
    
@endsection