<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'PostsController@get_home_api');

Route::get('/posts', 'PostsController@get_posts_summaries_api');

Route::get('/post/{slug}', 'PostsController@get_post_api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
