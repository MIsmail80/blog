<?php

namespace App\Http\Controllers;

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
