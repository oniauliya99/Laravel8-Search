<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('home', [
    "title" => "Home"
    ]);
});

// Route::get('/about', function () {
//     return view('about', [
//     "title" => "About",
//     "name" => "Auliya Oni Priyandika",
//     "email" => "oniauliya99@gmail.com",
//     "image" => "auliya.jpeg"
//     ]);
// });

// Route::get('/blog', [PostController::class , 'index']);
// Route::get('blog/{slug}', [PostController::class , 'show']);




















//coba tanpa lihat coding
Route::get('/about',function() {
  return view('about',[
    'title' => 'Ini Adalah Halaman About Tanpa Menggunakan Code',
    'name' => 'Auliya Oni Priyandika',
    'email' => 'oniauliya99@gmail.com',
    'image' => 'auliya.jpeg'
  ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}',[PostController::class,'find']);

Route::get('/categories/{category:slug}',[CategoryController::class,'find']);

Route::get('/categories', function () {
    return view('categories',[
      'title' => 'Semua Kategori',
      'category' => Category::all()
    ]);
});

Route::get('/post/{user:username}',function(User $user){
      return view('post',[
        'title' => 'Postingan Berdasarkan Author',
        'post' => $user->post->load(['user','category'])
      ]);
});