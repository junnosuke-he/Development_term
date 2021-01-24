<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BulletinBoard;

class BulletinBoardDetailsController extends Controller
{
    //
    public function index(Request $request)
    {
        $form = $request->all();
        $id_number = $request['id'];
        $date = BulletinBoard::where('id',$id_number)->get();
        
      return view('admin.bulletin_board.details',['id_number' => $id_number, 'date' =>$date]);
    }
}
