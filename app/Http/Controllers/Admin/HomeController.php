<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prefectures;
class HomeController extends Controller
{
    //
    public function add()
  {
      $pre = Prefectures::all();
      
      return view('home.home', ['pre' => $pre]);
  }
}
