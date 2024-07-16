<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function __invoke()
    {
        return view('posts.create');
    }
}
