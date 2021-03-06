<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use Storage;
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
        $max_id = $review->max('review_id');
        if (empty($max_id)) {
            $max_id = 1;
        } else {
            $max_id ++;
        }
        $form['review_id'] = $max_id;
        $form['user_id'] = '01';
        
        
        if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
            $review->game_image = Storage::disk('s3')->url($path);
          } else {
              $review->game_image = null;
          }
        unset($form['image']);
        unset($form['_token']);
        $review->fill($form);
        $review->save();
        
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
    public function delete(Request $request)
    {
     
        $review = Review::find($request->id);
      // 削除する
        $review->delete();
      //一覧表示用 
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
