<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return redirect('posts/show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect('posts/show');

        // $post->create([

        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        $posts = Post::get();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        // return $id;
        $editPosts = Post::find($id);
        return view('posts.edit', [
            'editPosts' => $editPosts
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        // return $id;
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('posts/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // return $id;
        Post::find($id)->delete();
        return redirect('posts/show');
    }
}
