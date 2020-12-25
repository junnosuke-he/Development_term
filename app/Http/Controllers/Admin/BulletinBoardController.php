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
        $this->validate($request, BulletinBoard::$rules);
        
        $bulletinboard = new BulletinBoard;
        $form = $request->all();
        unset ($form['_token']);
        $bulletinboard->fill($form);
        $bulletinboard->bulletin_board_id = '11';
        $bulletinboard->save();
        return view('admin.bulletin_board.create');
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
        return view('admin.bulletin_board.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
}
