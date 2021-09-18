<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $pp = Post::latest();
        return view('post',[
            "title" => "Daftar Produk Keramik Kinasih",
            "post"=> $pp->filter(request(['search']))->get()
        ]);
    }
    public function find(Post $post)
    {
        return view('blog',[
            "title" => "Single Post",
            "blog" => $post
        ]);
    }
}