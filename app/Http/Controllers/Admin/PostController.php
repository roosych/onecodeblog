<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'admin post index';
    }

    public function create()
    {
        return 'create post';
    }


    public function show($post)
    {
        return 'show post ' .$post;
    }


    public function edit($post)
    {
        return 'edit post ' .$post;
    }


    public function store()
    {
        return 'store post';
    }


    public function update($post)
    {
        return 'update post ' .$post;
    }


    public function delete($post)
    {
        return 'delete post ' .$post;
    }


    public function like($post)
    {
        return 'like post +1 ' .$post;
    }

}
