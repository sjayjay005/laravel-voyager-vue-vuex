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

Route::get('/', function () {
  $data = App\Post::all();
  return view('frontend.views.home.index', ['data' => $data]);
});

Route::get('post/{slug}', function($slug){
  $data = App\Post::where('slug', '=', $slug)->firstOrFail();
  return view('frontend.views.post.index', ['data' => $data]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

