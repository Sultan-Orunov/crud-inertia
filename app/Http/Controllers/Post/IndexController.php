<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderByDesc('created_at')->get();
        $posts = PostResource::collection($posts)->resolve();
        return inertia('Post/Index', compact('posts'));
    }
}
