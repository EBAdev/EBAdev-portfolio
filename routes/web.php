<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

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
    return inertia('HomePage/Index',[
      'posts' => Post::query()
      ->latest('published_at')
      ->with('author','category')
      ->take(8)
      ->get()
      ->map(fn($post) =>[
        'id' => $post->id,
        'title' => strip_tags($post->title),
        'slug' => $post->slug,
        'excerpt' => $post->excerpt,
        'date' => $post->created_at->diffForHumans(),
        'author' => $post->author->name,
        'author_username' => $post->author->username,
        'category' => $post->category->name,
        'category_color' => $post->category->hex,
        'category_slug' => $post->category->slug,
      ]),
    ]);
});
Route::get('/posts', function () {
  //TODO filter through more stuff than only title with search
    return inertia('PostsPage/Index',[
      'posts' => Post::query()
      ->with('author','category')
      ->latest('published_at')
      ->when(Request::input('search'), function ($query, $search){
        $query->where('title','like',"%{$search}%");
      })
      ->paginate(6)
      ->withQueryString()
      ->through(fn($post) =>[
        'id' => $post->id,
        'title' => strip_tags($post->title),
        'slug' => $post->slug,
        'excerpt' => $post->excerpt,
        'date' => $post->created_at->diffForHumans(),
        'author' => $post->author->name,
        'author_username' => $post->author->username,
        'category' => $post->category->name,
        'category_color' => $post->category->hex,
        'category_slug' => $post->category->slug,
      ]),
      'filters'  => Request::only(['search'])
    ]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return inertia('PostsPage/ThePost',[
      'post'=> [
        'id' => $post->id,
        'title' => $post->title,
        'slug' => $post->slug,
        'body' => $post->body,
        'date' => $post->created_at->diffForHumans(),
        'author' => $post->author->name,
        'author_username' => $post->author->username,
        'category' => $post->category->name,
        'category_color' => $post->category->hex,
        'category_slug' => $post->category->slug,
      ]
    ]);
  });

Route::get('/categories/{category:slug}', function (Category $category) {
  return inertia('PostsPage/Index',[
    'posts' => $category->posts()
    ->with('author','category')
    ->latest('published_at')
    ->when(Request::input('search'), function ($query, $search){
      $query->where('title','like',"%{$search}%");
    })
    ->paginate(6)
    ->withQueryString()
    ->through(fn($post) =>[
      'id' => $post->id,
      'title' => strip_tags($post->title),
      'slug' => $post->slug,
      'excerpt' => $post->excerpt,
      'date' => $post->created_at->diffForHumans(),
      'author' => $post->author->name,
      'author_username' => $post->author->username,
      'category' => $post->category->name,
      'category_color' => $post->category->hex,
      'category_slug' => $post->category->slug,
    ]),
    'filters'  => Request::only(['search'])
  ]);
});

Route::get('/authors/{author:username}', function (User $author) {
  return inertia('PostsPage/Index',[
    'posts' => $author->posts()
    ->with('author','category')
    ->latest('published_at')
    ->when(Request::input('search'), function ($query, $search){
      $query->where('title','like',"%{$search}%");
    })
    ->paginate(6)
    ->withQueryString()
    ->through(fn($post) =>[
      'id' => $post->id,
      'title' => strip_tags($post->title),
      'slug' => $post->slug,
      'excerpt' => $post->excerpt,
      'date' => $post->created_at->diffForHumans(),
      'author' => $post->author->name,
      'author_username' => $post->author->username,
      'category' => $post->category->name,
      'category_color' => $post->category->hex,
      'category_slug' => $post->category->slug,
    ]),
    'filters'  => Request::only(['search'])
  ]);
});

Route::get('/about', function () {
    return inertia('AboutPage');
});
Route::get('/contact', function () {
    return inertia('ContactPage');
});

