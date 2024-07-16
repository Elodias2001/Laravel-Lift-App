<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdatePostController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->update([
            'title' => fake()->name()
        ]);
        return redirect('/');
    }
}
