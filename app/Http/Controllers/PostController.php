<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Post::all();
        $postid = Post::find(3);
        $postcond = Post::findOrFail(3);
        $postfirst = Post::first();
        $postcondition = Post::where('id',3)->first();
        $postMultiCon = Post::where('id',3)
                            ->where('id',3)
                            ->get();
        $postMultiConOr = Post::where('id',3)
                            ->orWhere('user_id',1)
                            ->get();
        $postselect = Post::select('title','user_id')->get();

       // latest data created_at des
       $postLatest = Post::latest()->get();
       $postold = Post::oldest()->get();
       $limit = Post::take(5)->get();
       $skipandlimit = Post::skip(5)->take(10)->get();

      
        
        return view('post/post',compact('post'));
    }
public function study()
{
    // create new data
      Post::create([
        'name' => 'name',
      ]);


      //object method
      $post = new Post;
      $post->title  = 'insert data';
      $post->save();

    //single data update
    $post = Post::find(3);
    $post->title = 'updated';
    $post->save();

    //direct update
    Post::where('id',3)->update([
        'title' => 'test'
    ]);

    //delete by id

    Post::find(3)->delete();

    //destroy method
    Post::destroy(3);
    Post::destroy([3,4,5]);

    //count
    $count = Post::count();

    $countId = Post::where('user_id',1)->count();

    //exit check kore data ase kina

    Post::exists();
    Post::where('id',3)->exits();

    //pagination very important

    Post::paginate(10);
    Post::simplePaginate(10);

    //only one column, only value ane so fast kaj kore
    Post::pluck('title','id');

}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = User::all();
        // dd($user);
        return view('post/create',compact('user'));
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
            'user_id' => $request->user,
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
        'image' => $imagePath,
        'user_id' => Auth::id()
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
