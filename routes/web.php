<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
   return view('home',[
       "title" => "HOME",
<<<<<<< HEAD
       'active' => 'home'
=======
       "active" => "home"
>>>>>>> 3a2f2bd32e021249eb67da8246ee1078cd0302b3
   ]);
});
Route::get('/about', function () {
   return view('about', [
       "title" => "ABOUT",
       "active" => "about",
       "name" => "azmi romzi hoesaini",
       "email" => "azmiromzihoesaini@gmail.com",
       "image" => "azmi.png",
       'active' => 'about'
   ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post

Route::get('posts/{post:slug}',[PostController::class, 'show']);

Route::get('categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' =>"Post by Category : $category->name" ,
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        "active" => 'author',

    ]);
});
