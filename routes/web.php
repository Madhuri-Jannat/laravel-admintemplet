<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('bakend.dashboard');
});

// Route::get('/students', function () {
//     return view('bakend.Student.index');
// });

Route::get('students',[StudentController:: class,'index']);

Route::get('/students/create', function () {
    return view('bakend.Student.create');
});

// Route::get('students',[StudentController:: class,'create']);