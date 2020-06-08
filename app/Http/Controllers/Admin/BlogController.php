<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->get('title');
        $post->published_at = $request->get('published_at');
        $post->content = $request->get('content');
        $post->save();

        flash('Post created successfuly');
        return redirect()->route('admin.blog.index');
    }
}
