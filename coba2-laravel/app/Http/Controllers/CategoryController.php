<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function find(Category $category)
    {
        return view('post',[
            'title' => 'Produk Berdasarkan Kategori '.$category->name,
            'post' => $category->post->load(['user','category']),
            'category' => $category->name
        ]);
    }
}