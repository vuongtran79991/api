<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tin;

class TinController extends Controller
{
    //
    public function index(){
        $tin = Tin::where('id','>=',2)->paginate(3);
//            ->setPath('Tintaolao');
        return view('tin',['tin'=>$tin]);
    }
}
