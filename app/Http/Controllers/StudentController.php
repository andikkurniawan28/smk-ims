<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use App\Models\Classroom;
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
        $student = Student::join('majors', 'students.major_id', '=', 'majors.major_id')
        ->join('classrooms', 'students.classroom_id', '=', 'classrooms.classroom_id')
        ->select('students.*', 'majors.major_name', 'classrooms.classroom_name')
        ->get();
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
        $classroom = Classroom::all();
        return view('student.create', compact('major', 'classroom'));
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
        $major = Major::all();
        $classroom = Classroom::all();
        $student = Student::where('student_id', $id)->get();
        return view('student.edit', compact('student', 'major', 'classroom'));
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
            'major_id' => $request->major_id,
            'classroom_id' => $request->classroom_id,
            'address' => $request->address,
            'sex' => $request->sex,
            'religion' => $request->religion,
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
