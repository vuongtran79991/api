<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThanhVienRequest;
use Validator;
class ThanhVien1Controller extends Controller
{
    //
    public function getLogin(){
    return view('login');
    }
    public function postLogin(Request $request){
        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'email'    => 'Trường :attribute phải có định dạng email'
        ];
        $validator = Validator::make($request->all(), [
            'username'     => 'required|max:255',
            'password' => 'required|numeric|min:6|confirmed',
        ], $messages);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database

            return redirect('register')
                ->with('message', 'Đăng ký thành công.');
        }

    }
}
