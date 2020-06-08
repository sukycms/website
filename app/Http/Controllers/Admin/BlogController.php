<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('admin.blog.index', [
            'posts' => Post::latest()->paginate(),
        ]);
    }

    public function create(): View
    {
        return view('admin.blog.create');
    }
}
