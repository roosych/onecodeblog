@extends('layouts.base')

@section('title', 'Страница регистрации')

@section('content')
    <div class="container">
        <h3 class="my-5">Registration</h3>
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="col-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Password confirm</label>
                    <input type="password" class="form-control" id="password_confirm" placeholder="Password confirm" name="password_confirm">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection