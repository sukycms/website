<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id, $slug)
    {
        return view('blog.show', [
            'post' => Post::find($id)
        ]);
    }
}
