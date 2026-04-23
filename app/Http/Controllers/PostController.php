<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Post::all();
        return view('post/post',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:7048'
        ]);
        // Post::create($request->all()); ata shortcurt
        $imagePath = null;
        if ($request->hasFile('image')) {
            // $imageName = time().'.'.$request->image->extension();
            // $request->image->move(public_path('uploads'), $imageName); //ata public folder a uploads folder create kore save hobe
            $imagePath = $request->file('image')->store('posts', 'public');
        }
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::find($id);
        return view('/post/edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $imagePath = $post->image; // পুরানো image ধরে রাখলাম

    if ($request->hasFile('image')) {

        // নতুন image save
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    $post->update([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath
    ]);

    return redirect()->route('posts.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
