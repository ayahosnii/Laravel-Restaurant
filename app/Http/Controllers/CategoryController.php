<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryBlog::has('posts')->get();
        return response()->json($categories);
    }

}
