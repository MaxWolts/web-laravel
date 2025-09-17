<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['user', 'category'])
            ->latest()
            ->get();

        return view('pages.blogs', [
            'blogs' => $blogs
        ]);
    }
    public function show(Blog $blog)
    {
        $blog->load('category', 'user');
        return view('blogs.show', ['blog' => $blog]);
    }
}
