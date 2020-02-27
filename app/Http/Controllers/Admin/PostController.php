<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $authors = User::where('role_id', 2)->get();
        
        $posts = Post::with('author');

        if (!empty(request('cats'))) {
            $catID = request('cats');
            $posts->whereHas('categories', function (Builder $query) use ($catID) {
                $query->where('category_id', $catID);
            });
        }

        if (!empty(request('author'))) {
            $posts->where('user_id', '=', request('author'));
        }

        $posts = $posts->paginate(10);

        return view('admin.posts.index', compact('posts', 'categories', 'authors'));
    }

    public function setFeaturedPost()
    {
        $postID = request('post_id');
        $postStatus = request('status');

        $post = Post::find($postID);

        $post->featured = $postStatus;

        $post->save();

        if ($post) {
            return 'updated successfully';
        }

        return 'failed';
    }
}
