<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $show_datas = Student::all();
      return view ('students/all',compact('show_datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student_data = new Student();
       $student_data->stuName = $request->stuName;
       $student_data->fName = $request->fName;
       $student_data-> mName = $request->mName;
       $student_data->email = $request->email;
       $student_data->mobile = $request->mobile;
       $student_data->save();
       return redirect(route('student.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_data = Student::find($id);
        return view('students/single',compact('single_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_data = Student::find($id);
      return view('students/edit',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_data = Student::find($id);
        $update_data->stuName = $request->stuName;
        $update_data->fName = $request->fName;
        $update_data->mName = $request->mName;
        $update_data->email = $request->email;
        $update_data->mobile = $request->mobile;
        $update_data->save();
        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect(route('student.index'));
    }
}
