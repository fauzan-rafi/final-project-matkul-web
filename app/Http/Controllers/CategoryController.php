<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;


class CategoryController extends Controller
{

    public function index()
    {
        return view('store.products', [
            'posts' => Store::latest()->paginate(6),
        ]);
    }

    public function show(Category $category)
    {
        $posts = $category->stores()->paginate(6);
        return view('store.products',compact('posts','category'));
    }
}
