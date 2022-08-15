<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degree = Degree::all();
        return view('degree.index', compact('degree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('degree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Degree::create($request->all());
        return $this->backToRouteWithMessage('index', 'disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $degree = Degree::where('degree_id', $id)->get();
        return view('degree.show', compact('degree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $degree = Degree::where('degree_id', $id)->get();
        return view('degree.edit', compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $degree = Degree::where('degree_id', $id)->update([
            'degree_name' => $request->degree_name,
        ]);
        return $this->backToRouteWithMessage('index', 'dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $degree = Degree::where('degree_id', $id)->delete();
        return $this->backToRouteWithMessage('index', 'dihapus');
    }

    public function backToRouteWithMessage($where, $message)
    {
        return redirect()->route('degree.'.$where)->with('success','Data berhasil '.$message);
    }
}
