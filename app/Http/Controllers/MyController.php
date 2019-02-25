<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    //
    public function hello(){
         echo "Hello";
    }
    public function khoahoc($ten){
        echo "Khoa hoc : ".$ten;
        return redirect()->route('MyRoute');
    }
    public function GetURL(Request $request){
//        return $request->url();
        if($request->is('re*')){
            echo " yes";
        }
        else
            echo "no";
    }
    public function postForm(Request $request){
        echo "Ten cua ban la : ".$request->input('hoten');
//        if($request->has('tuoi')){
//            echo " yes";
//        }
//        else
//            echo "no";
    }
    public function setCookie(){
        $response = new Response();
        $response->withCookie('khoahoc','Laravel',1);
        return $response;
    }
    public function getCookie(Request $request){
        return $request->cookie('khoahoc');
    }
    public function postFile(Request $request)
    {
//
        if ($request->hasFile('myFile')) {

            $file = $request->file('myFile');
            if($file->getClientOriginalExtension('myFile')=="jpg")
            {
                $filename = $file->getClientOriginalName('myFile');

                $file->move('img',$filename);
                echo "Da luu file";
            }
            else
                echo "Khong duoc phep";
        } else {
            echo "chua co file";
        }
    }
    public function getJson(){
        $array = ['Laravel'=>'vuong'];
        return response()->json($array);
    }
    public function Time($t){
        return view('myView',['t'=>$t]);
    }
    public function blade($str){
        $khoahoc = "<b>laravel-walter</b>";
        if($str =="laravel")
            return view('pages.laravel',['khoahoc'=>$khoahoc]);
        else if($str =="php"){
            return view('pages.php',['khoahoc'=>$khoahoc]);
        }
    }
}
