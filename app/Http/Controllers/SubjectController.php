<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Major;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::join('majors', 'subjects.major_id', '=', 'majors.major_id')
        ->select('subjects.*', 'majors.major_name')
        ->get();
        return view('subject.index', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $major = Major::all();
        return view('subject.create', compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subject::create($request->all());
        return $this->backToRouteWithMessage('index', 'disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::where('subject_id', $id)->get();
        return view('subject.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $major = Major::all();
        $subject = Subject::where('subject_id', $id)->get();
        return view('subject.edit', [
            'subject' => $subject,
            'major' => $major,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Subject::where('subject_id', $id)->update([
            'subject_name' => $request->subject_name,
            'major_id' => $request->major_id,
        ]);
        return $this->backToRouteWithMessage('index', 'dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::where('subject_id', $id)->delete();
        return $this->backToRouteWithMessage('index', 'dihapus');
    }

    public function backToRouteWithMessage($where, $message)
    {
        return redirect()->route('subject.'.$where)->with('success','Data berhasil '.$message);
    }
}
