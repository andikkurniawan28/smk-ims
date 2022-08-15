<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::join('majors', 'students.major_id', '=', 'majors.major_id')->get();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $major = Major::all();
        return view('student.create', compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return $this->backToRouteWithMessage('index', 'disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('student_id', $id)->join('majors', 'students.major_id', '=', 'majors.major_id')->get();
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('student_id', $id)->join('majors', 'students.major_id', '=', 'majors.major_id')->get();
        return view('student.edit', compact('student'));
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
        Student::where('student_id', $id)->update([
            'student_name' => $request->student_name,
            'major_id' => $request->student_name,
            'internship_id' => $request->student_name,
            'address' => $request->student_name,
            'sex' => $request->student_name,
            'religion' => $request->student_name,
            'birthplace' => $request->birthplace,
            'birthday' => $request->birthday,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'father' => $request->father,
            'mother' => $request->mother,
        ]);
        return $this->backToRouteWithMessage('index', 'dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('student_id', $id)->delete();
        return $this->backToRouteWithMessage('index', 'dihapus');
    }

    public function backToRouteWithMessage($where, $message)
    {
        return redirect()->route('student.'.$where)->with('success','Data berhasil '.$message);
    }
}
