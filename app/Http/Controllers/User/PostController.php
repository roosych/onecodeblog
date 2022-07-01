<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'user post index';
    }

    public function create()
    {
        return view('user.post.create');
    }


    public function show($post)
    {
        return 'show post ' .$post;
    }


    public function edit($post)
    {
        return 'edit post ' .$post;
    }


    public function store(Request $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');
        dd($title, $content);
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
