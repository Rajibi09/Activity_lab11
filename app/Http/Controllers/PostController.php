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
        
        $posts = Post::all();
        return view('index', compact('posts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');  // Show the create view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title page' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

     
        Post::create([
            'title page' => $request->title,
            'content' => $request->body,  
        ]);

        
        return redirect('/')->with('success', 'Post created successfully!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);

        // Return the view with the post data
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     
        $post = Post::findOrFail($id);

        
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
  
        $request->validate([
            'post title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

       
        $post = Post::findOrFail($id);
        $post->update([
            'post title' => $request->title,
            'content' => $request->body,  
        ]);

      
        return redirect('/')->with('success', 'Post edit successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $post = Post::findOrFail($id);
        $post->delete();

        
        return redirect('/')->with('success', 'Post deleted successfully!'); 
    }
}
