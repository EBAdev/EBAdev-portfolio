<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  
*/




Route::get('/', function () {
    return inertia('HomePage/Index');
});
Route::get('/posts', function () {
  
    return inertia('PostsPage',[
      'posts' => Post::with('author','category')->paginate(6)->through(fn($post) =>[
        'id' => $post->id,
        'title' => $post->title,
        'excerpt' => $post->excerpt,
        'date' => $post->created_at->diffForHumans(),
        'author' => $post->author->name,
        'category' => $post->category->name,
        'category_color' => $post->category->hex,
      ]),
    ]);
});
Route::get('/about', function () {
    return inertia('AboutPage');
});
Route::get('/contact', function () {
    return inertia('ContactPage');
});

