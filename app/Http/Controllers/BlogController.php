<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {

        $post = (object)[
            'id' => 1,
            'title' => 'title dasd',
            'content' => 'Blog content',
        ];
        $posts = array_fill(0, 5, $post);

        return view('blog.index', compact('posts'));
    }


    public function show($post)
    {
        $post = (object)[
            'id' => 1,
            'title' => 'title sdsd',
            'content' => 'Blog content',
        ];
        return view('blog.show', compact('post'));
    }


    public function like($post)
    {
        return 'blog like ' .$post;
    }
}
