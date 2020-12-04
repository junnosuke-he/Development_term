<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bulletin_boardController extends Controller
{
    //
    public function add()
  {
      return view('admin.bulletin_board.create');
}
}
