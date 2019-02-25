<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('test');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'uname'=>'required|min:10',
            'psw'=>'required'
        ]);
        return redirect()->route('student.index');
    }
}
