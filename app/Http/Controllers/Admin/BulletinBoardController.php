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
      return view('admin.bulletin_board.index');
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
}
