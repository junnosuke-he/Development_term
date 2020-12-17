<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bulletin_Board;
class BulletinBoardController extends Controller
{
    //
    public function add()
    {
      return view('admin.bulletin_board.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Bulletin_Board::$rules);
        
        $bulletinboard = new Bulletin_Board;
        $form = $request->all();
        
        //課題１４
        unset ($form['_token']);
        
        $bulletinboard->fill($form);
        $bulletinboard->save();
        return view('admin.bulletin_board.create');
    }
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            //検索されたら検索結果を取得する
            $posts = Bulletin_Board::where('title',$cond_title)->get();
        } else {
            //それ以外はすべtのニュースを取得する
            $posts = Bulletin_Board::all();
        }
        return view('admin.bulletin_board.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
}
