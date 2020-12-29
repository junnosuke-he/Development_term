<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BulletinBoard;
class BulletinBoardController extends Controller
{
    //
    public function add()
    {
      return view('admin.bulletin_board.create');
    }
    public function create(Request $request)
    {
        //$this->validate($request, BulletinBoard::$rules);
        
        $bulletinboard = new BulletinBoard;
        // $test = $bulletinboard->max('bulletin_board_id');
        // if (isset($test)) {
            
        // } else {
             $test = ['bulletin_board_id' => '値がありません'];
                    // @foreach($test as $tests)
                    // {{ $tests->bulletin_board_id }} 
                    // @endforeach
        // }
        // $form = $request->all();
        // unset ($form['_token']);
        // $bulletinboard->fill($form);
        // $bulletinboard->bulletin_board_id = 1;
        // $bulletinboard->save();
        return view('admin.bulletin_board.create', ['test' => $test]);
    }
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = BulletinBoard::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = BulletinBoard::all();
        }
        $test = ['bulletin_board_id' => '値がありません'];
        return view('admin.bulletin_board.index', ['posts' => $posts, 'cond_title' =>$cond_title, 'test' => $test]);
    }
}
