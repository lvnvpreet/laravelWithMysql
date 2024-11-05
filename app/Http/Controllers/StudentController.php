<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add(Request $reqest){
        $student = new Student();
        $student->name= $reqest->name;
        $student->email= $reqest->email;
        $student->phone= $reqest->phone;
        $student->save();
        if($student){
            return redirect ('list');
        }
        else{
            echo 'Student not added';
        }
        
    }

    function list(){
        $studentData = Student::paginate(2);
    
        return view('listStudent', ['students'=> $studentData]);
    }

    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect ('list');
        }
    }

    function edit($id){
        $isGetData = Student::find($id);
        return view('editList',['student'=>$isGetData]);
    }

    function editStudent(Request $reqest, $id){
        $student = Student::find($id);
        $student->name= $reqest->name;
        $student->email= $reqest->email;
        $student->phone= $reqest->phone;
        $student->save();
        if($student){
            return redirect ('list');
        }else{
            echo 'Student data not updated';
        }
    }

    function findStudent(Request $reqest){
        $student = Student::where('name','like',"%$reqest->search%")->get();
        return view('listStudent', ['students'=> $student,'search'=>$reqest->search]);
    }

    function multipleDelete(Request $reqest){
       
        $student = Student::destroy($reqest->ids);
        if($student){
            return redirect ('list'); 
        }
    }
}
