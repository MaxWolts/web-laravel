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

        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }
}
