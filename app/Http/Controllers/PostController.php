<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'category'])->get();
        return response()->json($posts);
    }

    public function create()
    {
        // Return view for creating a post
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'gambar' =>  'nullable|string|max:255',
        ]);

        
        $post = Post::create($validated);
        return response()->json($post, 201);
    }

    public function show(Post $post)
    {
        $post->load(['user', 'category']);
        return response()->json($post);
    }

    public function edit(Post $post)
    {
        // Return view for editing a post
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'user_id' => 'sometimes|required|exists:users,id',
            'category_id' => 'sometimes|required|exists:categories,id',
            'gambar' =>  'nullable|string|max:255',
        ]);
        
        Log::info('Data yang diterima:', $validated);
        $post->update($validated);
        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
