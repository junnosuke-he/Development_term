<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BulletinBoardController extends Controller
{
    //
    public function add()
    {
      return view('admin.bulletin_board.index');
    }
    public function create(Request $request)
    {
        $this->validate($request, BulletinBoard::$rules);
        
        $bulletinboard = new BulletinBoard;
        $form = $request->all();
        
        //課題１４
        unset ($form['_token']);
        
        $bulletinboard->fill($form);
        $bulletinboard->save();
        return view('admin.bulletin_board.create');
    }
}
