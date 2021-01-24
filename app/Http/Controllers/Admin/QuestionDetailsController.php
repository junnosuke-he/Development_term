<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionDetailsController extends Controller
{
    //
    public function index(Request $request)
    {
        $form = $request->all();
        $id_number = $request['id'];
        $date = Question::where('id',$id_number)->get();
        
      return view('admin.question.details',['id_number' => $id_number, 'date' =>$date]);
    }
}
