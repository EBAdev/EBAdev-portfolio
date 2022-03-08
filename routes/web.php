<?php

use App\Models\Post;
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
    return inertia('HomePage/Index',[
      'username' => 'BECK'
    ]
    );
});
Route::get('/posts', function () {
    return inertia('PostsPage',[
      'posts' => Post::all(),
    ]);
});
Route::get('/about', function () {
    return inertia('AboutPage');
});
Route::get('/contact', function () {
    return inertia('ContactPage');
});
