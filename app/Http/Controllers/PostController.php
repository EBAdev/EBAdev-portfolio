<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
  public function HomePage()
  {
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
  }

  public function Index(){
    return inertia('PostsPage/Index',[
      'posts' => Post::query()
      ->with('author','category')
      ->latest('published_at')
      ->filter(request(['search']))
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
      'filters'  => request()->only(['search'])
    ]);
  }

  public function Show(Post $post)
  {
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
  }
}
