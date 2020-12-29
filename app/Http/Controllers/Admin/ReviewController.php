<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
class ReviewController extends Controller
{
    //
    public function add()
    {
      return view('admin.review.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Review::$rules);
        
        $review = new Review;
        $form = $request->all();
        if (isset($form['image'])) {
              $path = $request->file('image')->store('public/image');
              $review->game_image = basename($path);
          } else {
              $review->game_image = null;
          }
        unset ($form['_token']);
        unset($form['image']);
        $review->fill($form);
        $review->review_id = '33';
        $review->save();
        return view('admin.review.create');
    }
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = Review::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = Review::all();
        }
        return view('admin.review.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
}
