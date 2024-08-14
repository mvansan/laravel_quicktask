<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string|max:255',
        ]);

        Post::create($request->all());
        return redirect()->route('admin.post.index')->with('success','Created successfully');
    }
    public function create()
    {
        return view('admin.posts.create');
    }
}
