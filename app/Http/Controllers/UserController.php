<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        $role = Role::all();
        $teacher = Teacher::all();
        $major = Major::all();
        $subject = Subject::all();
        return view('user.create', [
            'role' => $role,
            'teacher' => $teacher,
            'major' => $major,
            'subject' => $subject,
        ]);
    }

    public function store(Request $request)
    {
        $request->request->add(['password' => $this->generatePassword($request->username)]);
        User::create($request->all());
        return $this->backToRouteWithMessage('index', 'disimpan');
    }

    public function show($id)
    {
        $user = User::join('roles', 'users.role_id', '=', 'roles.role_id')
            ->join('teachers', 'users.teacher_id', '=', 'teachers.teacher_id')
            ->join('majors', 'users.major_id', '=', 'majors.major_id')
            ->join('subjects', 'users.subject_id', '=', 'subjects.subject_id')
            ->select('users.*', 'roles.role_name', 'teachers.teacher_name', 'majors.major_name', 'subjects.subject_name')
            ->where('users.user_id', '=', $id)
            ->get();
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $role = Role::all();
        $teacher = Teacher::all();
        $major = Major::all();
        $subject = Subject::all();
        $user = User::where('user_id', $id)->get();
        return view('user.edit', [
            'role' => $role,
            'teacher' => $teacher,
            'major' => $major,
            'subject' => $subject,
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        User::where('user_id', $id)->update([
            'username' => $request->username,
            'password' => $this->generatePassword($request->username),
            'name' => $request->name,
            'address' => $request->address,
            'birthplace' => $request->birthplace,
            'birthday' => $request->birthday, 
            'university' => $request->university,
            'degree' => $request->degree,
            'role_id' => $request->role_id,
            'teacher_id' => $request->teacher_id,
            'major_id' => $request->major_id,
            'subject_id' => $request->subject_id,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
        ]);
        return $this->backToRouteWithMessage('index', 'dirubah');
    }

    public function destroy($id)
    {
        User::where('user_id', $id)->delete();
        return $this->backToRouteWithMessage('index', 'dihapus');
    }

    public function backToRouteWithMessage($where, $message)
    {
        return redirect()->route('user.'.$where)->with('success','Data berhasil '.$message);
    }

    public function generatePassword($username)
    {
        return md5($username."123");
    }

}
