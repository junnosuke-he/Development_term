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
        $this->validate($request, QuestionController::$rules);
        
        $question = new Question;
        $form = $request->all();
        unset ($form['_token']);
        $question->fill($form);
        $question->question_id = 1;
        $question->save();
        return view('admin.question.create');
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
}
