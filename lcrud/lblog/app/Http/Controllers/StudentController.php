<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        #$students = Student::all();
        #return view('welcome',compact('students'));
        return view('welcome');
    }
    public function create(){
        return view('create');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);        
        $stu = new Student;        
        $stu->first_name = $request->firstname;
        $stu->last_name = $request->lastname;
        $stu->email = $request->email;
        $stu->phone = $request->phone;

        $stu->save();        
        return redirect(route('home'))->with('successMsg','Student Info Successfully Added!');        
    }
}
