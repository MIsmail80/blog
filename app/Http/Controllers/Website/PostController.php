<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('categories')->where('user_id', '=', Auth::id())->paginate(10);

        return view('website.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();

        return view('website.posts.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewPostRequest $request)
    {
        // Upload photo
        if (request()->hasFile('photo')) {
            $photoFile = request()->file('photo');

            $ext = $photoFile->extension();

            $fileName = Str::random(5) . '.' . $ext;

            $folder = "uploads/";

            $path = $folder . $fileName;

            $photoFile->move($folder, $fileName);
        }

        // Save post
        $post = new Post;
        $post->title = request('title');
        $post->content = request('content');
        $post->image = $path;
        $post->views = 0;
        $post->likes = 0;
        $post->featured = 0;
        $post->user_id = Auth::id();
        $post->save();

        // Attache categories
        $post->categories()->sync(request('cats'));

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $cats = Category::all();

        $post->load('categories');

        return view('website.posts.edit', compact('post', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Upload photo
        if (request()->hasFile('photo')) {
            $photoFile = request()->file('photo');

            $ext = $photoFile->extension();

            $fileName = Str::random(5) . '.' . $ext;

            $folder = "uploads/";

            $path = $folder . $fileName;

            $photoFile->move($folder, $fileName);
        }


        $post->title = request('title');
        $post->content = $request->get('content');
        if (isset($path)) {
            File::delete(public_path($post->image));
            $post->image = $path;
        }
        $post->save();

        // Attache categories
        $post->categories()->sync(request('cats'));

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('posts');
    }
}
