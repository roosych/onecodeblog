@extends('layouts.base')

@section('title', 'Страница входа')

@section('content')
    <div class="container">
        <h3 class="my-5">Login</h3>
        <form action="">
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
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection