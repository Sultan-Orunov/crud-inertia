<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        return inertia('Post/Index', [
            'posts' => Post::orderByDesc('created_at')->get()
        ]);
    }
}
