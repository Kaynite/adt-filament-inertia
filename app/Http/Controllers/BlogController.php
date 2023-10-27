<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class BlogController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Blog/Index', [
            'posts' => Post::with('category')->get(),
        ]);
    }

    public function show(Post $post): Response
    {
        return Inertia::render('Blog/Show', [
            'post' => $post,
        ]);
    }
}
