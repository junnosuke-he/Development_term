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
        return view('admin.bulletin_board.create');
    }
}
