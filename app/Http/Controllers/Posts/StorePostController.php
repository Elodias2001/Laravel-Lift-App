<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class StorePostController extends Controller
{
    public function __invoke(Request $request)
    {
        Post::create([
            ...$request->only(['title','description']),
            'published_at'=>now()->subMinutes(rand(10,20)),
            'user_id' => User::factory()->create()->id,
        ]);

        return redirect('/')->with('message','Post enrégistré avec succès !😁');
    }
}
