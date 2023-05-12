<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    /**
     * Summary of show
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view ('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
