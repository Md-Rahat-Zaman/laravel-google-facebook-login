<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
    public function index() {
        return response()->json(Post::all());
    }

    public function show($id)
    {
        $post = Post::find($id);
        if(!$post)
            {
                return response()->json([
                    'messege' => 'data not found'
                ],400);
            }
        else{
            return response()->json([
                'data' => $post
            ]);
        }

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Post created successfully',
            'data' => $post
        ]);
    }
}
