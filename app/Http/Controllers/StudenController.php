<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use App\StudentModel;
class StudenController extends Controller
{
    public function index(){
//        echo "Day la trang danh sach";
        $student = StudentModel::all();
//        print_r($student);
        return view('restful.list',compact('student'));
    }
    public function create(){
//        echo " day la form them du lieu";
        return view('restful.add');
    }
    public function store(TestRequest $request){
        $student= new StudentModel;
        $student->name=$request->txtHoTen;
        $student->toan=$request->txtToan;
        $student->ly=$request->txtLy;
        $student->hoa=$request->txtHoa;
        $student->save();
        return redirect()->route('student.index');
    }
//    public function show($id){
//        echo " day la show";
//    }

    public function edit($id){
//        echo "Day la form update cua dong thu $id";
        //return view('restful.edit');
        $data= StudentModel::find($id);
        return view('restful.edit',compact('data'));
    }
    public function show($id,Request $request){
        $student = StudentModel::find($id);
        $student->name=$request->txtHoTen;
        $student->toan=$request->txtToan;
        $student->ly=$request->txtLy;
        $student->hoa=$request->txtHoa;
        $student->save();
        return redirect()->route('student.index');
    }
    public function destroy($id){
        $student = StudentModel::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }

}
