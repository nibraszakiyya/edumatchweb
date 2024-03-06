<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $data = Student::all();
        return view('datastudent', compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insert(Request $request){
        Student::create($request->all());
        return redirect()->route('student')->with('success','Data berhasil ditambahkan');
    }

    public function tampilkandata($id){
        $data = Student::find($id);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request,$id){
        $data = Student::find($id);
        $data->update($request->all());

        return redirect()->route('student')->with('success','Data berhasil di update');
    }

    public function delete($id){
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('student')->with('success','Data berhasil di delete');
    }
}
