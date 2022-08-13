<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/user', UserController::class);
Route::resource('admin/role', RoleController::class);
Route::resource('admin/major', MajorController::class);
Route::resource('admin/teacher', TeacherController::class);
Route::resource('admin/subject', SubjectController::class);
