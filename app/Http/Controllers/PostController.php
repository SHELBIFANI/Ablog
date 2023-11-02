<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {

        return view('dashboard', [
            'posts' => auth()->user()->posts()->paginate(2),
        ]);
        
    }

    public function create()
    {

        return view('post.create');

    }

    public function store(StorePostRequest $request, Post $post)
    {
        $imagePath = $request->file('image')->store('images', 'public');

        $post = $request->user()->posts()->create(array_merge(
            $request->validated(),
            ['image' => $imagePath]
        ));

        // $post = new Post([
        //     'title' => $request->input('title'),
        //     'details' => $request->input('details'),
        //     'user_id' =>  $request->user()->id,
        //     'image' => $imagePath,
        // ]);

        // $post->save();
        
        // dd($request->file('image')->store('images'));
        // dd($request->user()->posts()->create($request->input()));
        return to_route('dashboard');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Request $request, Post $post)
    {
        if ($request->user()->id != $post->user_id) {
            return abort(403);
        }

        return view('post.edit', ['post' => $post]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $imagePath = $request->file('image')->store('images', 'public');
        
        if($request->hasFile('image')){
            $path = $post->image;
            Storage::disk('public')->delete($path);

            $post = $request->user()->posts()->update(array_merge(
                $request->validated(),
                ['image' => $imagePath]
            ));
        }

        
        return to_route('dashboard');
    }

    public function destroy(Post $post)
    {
        $path = $post->image;
        Storage::disk('public')->delete($path);

        $post->delete();

        return to_route('dashboard');
    }
}
