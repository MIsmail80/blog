<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $categories = Category::all();

        return view('website.index', compact('categories'));
    }
}
