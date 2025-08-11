<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
   public function index(Request $request)
{
    $query = Post::query();

    if ($request->has('search') && !empty($request->search)) {
        $searchTerm = $request->search;

        $query->where(function($q) use ($searchTerm) {
            $q->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchTerm) . '%'])
              ->orWhereRaw('LOWER(content) LIKE ?', ['%' . strtolower($searchTerm) . '%']);
        });
    }

    $posts = $query->latest()->paginate(10);

    return view('posts.index', compact('posts'));
}


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'title'   => $request->title,
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        Post::create($data);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'title'   => $request->title,
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }

            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post deleted successfully!');
    }

    // Public-facing blog list
    public function publicIndex()
    {
        $posts = Post::latest()->paginate(6); // 6 per page
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
