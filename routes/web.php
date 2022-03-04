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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('ex/hardroutes/posts', function () {
    return view('posts');
});

Route::get('ex/hardroutes/posts/{post}', function ($slug) {
    //Find a post by its slug and pass it to the view called "post"

    //post = class [Post] using methode[find] give the parameters[$slug]
    //return the view (name of the view[post]) with the array that contains ['post' => $post]

    $post = Post::find($slug);
    return view('post', [
        'post' => $post
    ]);


})->where('post', '[A-z0-9]+');
