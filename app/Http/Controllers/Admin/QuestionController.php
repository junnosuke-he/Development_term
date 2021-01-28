<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
class QuestionController extends Controller
{
    //
     public function add()
  {
      return view('admin.question.create');
  }
    public function create(Request $request)
    {
        $this->validate($request, Question::$rules);
        $question = new Question;
        $form = $request->all();
        $max_id = $question->max('question_id');
        if (empty($max_id)) {
            $max_id = 1;
        } else {
            $max_id ++;
        }
        $form['question_id'] = $max_id;
        $form['user_id'] = '01';
        unset ($form['_token']);
        $question->fill($form);
        $question->save();
        
       //一覧表示用 
       $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = Question::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = Question::all();
        } 
        return view('admin.question.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = Question::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = Question::all();
        }
        return view('admin.question.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
    public function delete(Request $request)
    {
     
        $question = Question::find($request->id);
      // 削除する
        $question->delete();
      //一覧表示用 
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = Question::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = Question::all();
        }
        return view('admin.question.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
  }  
}
