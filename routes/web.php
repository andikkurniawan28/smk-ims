<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources(['admin/user' => UserController::class]);
Route::resources(['admin/role' => RoleController::class]);
Route::resources(['admin/major' => MajorController::class]);
Route::resources(['admin/teacher' => TeacherController::class]);
Route::resources(['admin/subject' => SubjectController::class]);
Route::resources(['admin/degree' => DegreeController::class]);
Route::resources(['admin/student' => StudentController::class]);
Route::resources(['admin/classroom' => ClassroomController::class]);
