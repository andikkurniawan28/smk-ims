<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'admin/user' => UserController::class,
    'admin/role' => RoleController::class,
    'admin/major' => MajorController::class,
    'admin/teacher' => TeacherController::class,
    'admin/subject' => SubjectController::class,
    'admin/degree' => DegreeController::class,
    'admin/student' => StudentController::class,
]);
