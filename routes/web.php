<?php

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

Route::get('/', 'PostsController@get_home_web');

Route::get('/post', 'PostsController@get_home_web');

Route::get('/post/{slug}', 'PostsController@get_post_web');

// Route::get('post/{slug}', function($slug){
//   $data = App\Post::where('slug', '=', $slug)->firstOrFail();
//   return view('frontend.views.post.index', ['data' => $data]);
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

