<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    //
    public function login(Request $request){
        $this->validate($request,[
            'uname'=>'required',
            'psw'=>'required'
        ]);
       $username= $request['uname'];
       $password = $request['psw'];
//       $user =User::find(1);
//       Auth::login($user);
//        return view('success',['user'=>Auth::user()]);

       if(Auth::attempt(['name'=>$username,'password'=>$password]))
           return view('success',['user'=>Auth::user()]);
       else{

           return view('login');
       }
//        if(Auth::attempt(['name'=>$request['username'],'password'=>$request['password']])){
//            echo "DONE";
//        }
//
//        else {
//            echo "False";
//        }
//        $name = User::select('id')->where('name',$username)->get();
//        echo $name;
        //echo bcrypt($request->password);
    }

    public function logout(){
        Auth::logout();
        return view('login');

    }

}
