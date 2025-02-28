<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexPostController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }
}
