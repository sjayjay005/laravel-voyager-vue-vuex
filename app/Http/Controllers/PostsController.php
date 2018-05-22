<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Voyager;
// use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

  private function get_post($slug) {
    $collection = Post::where('slug', '=', $slug)->firstOrFail();
    $collection['image'] = Voyager::image($collection->image);

    return collect(['post' => $collection->toArray()]);
  }

  private function get_posts_summaries() {
    $collection = Post::all([
      'id',
      // 'author_id',
      // 'category_id',
      'title',
      // 'seo_title',
      // 'excerpt',
      // 'image',
      'slug',
      'image'
      // 'meta_description',
      // 'meta_keywords',
      // 'status',
      // 'featured',
      // 'created_at',
      // 'updated_at'
    ]);

    $collection->transform(function($post) {
      $post->thumb = Voyager::image($post->image);
      return $post;
    });

    return collect(['posts' => $collection->toArray()]);
  }


  public function get_posts_summaries_api()
  {
    $data = $this->get_posts_summaries();
    return response()->json($data);
  }

  /**
   * DataLayer for Single Post
   */
  public function get_post_web($slug, Request $request)
  {
    $data = $this->get_post($slug);

    $data = $this->add_meta_data($data, $request);
    return view('frontend.views.post.index', ['data' => $data]);
  }

  /**
   * API Data for Single Post
   */
  public function get_post_api($slug)
  {
    $data = $this->get_post($slug);
    return response()->json($data);
  }

  /**
   * DataLayer for Home Page
   */
  public function get_home_web(Request $request)
  {
    $data = $this->get_posts_summaries();

    $data = $this->add_meta_data($data, $request);
    return view('frontend.views.home.index', ['data' => $data]);
  }

  /**
   * API Data for Home Page
   */
  public function get_home_api()
  {
    $data = $this->get_posts_summaries();
    return response()->json($data);
  }

  /**
   * Injects metadata to the data request
   */
  private function add_meta_data($collection, $request)
  {
   return $collection->merge([
     'path' => $request->getPathInfo()
   ]);
  }

}
