<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Question extends Controller
{
    //
        public function index(Request $request)
  {
      return view('admin.question.index');
}
}
