<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function homePage()
    {
        $posts = Post::with('categories')->latest()->take(5)->get();

        return view('website.index', compact('posts'));
    }

    public function getCategoryPosts($catID)
    {
        $category = Category::find($catID);

        $posts = Post::with('categories')
                        ->whereHas('categories', function (Builder $query) use ($catID) {
                            $query->where('category_id', $catID);
                        })
                        ->latest()->paginate(10);

        return view('website.category', compact('category', 'posts'));
    }
}
