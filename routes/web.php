<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accountscontroller;
use App\Http\Controllers\blogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FileUploadController;

Route::get('/', function() {
    return view('pages.home');
})->name('home');

Route::get('/blogs/{type}',[blogController::class,'index'])->name('blog');
Route::get('/blogdetail/{id}',[blogController::class,'readmore']);


Route::get('/signin', function(){
    return view('account.login');
})->name('login');
Route::post('/signin',[accountscontroller::class,'login']);


Route::get('/signup',function(){
    return view('account.register');
})->name('register')->middleware('guest');
Route::post('/signup',[accountscontroller::class,'signup'])->middleware('guest');

Route::get('/logout',[accountscontroller::class,'logout'])->name('logout');


Route::get('/admin',[adminController::class,'login']);
Route::post('/admin/login',[adminController::class,'signup']);
Route::get('/admin/dashboard',[adminController::class,'index'])->name('dashboard')->middleware('CheckAdmin');

Route::get('/admin/addnewcourse',function(){
    return view('admin.addnewcourse');
})->name('addcourse')->middleware('CheckAdmin');

Route::get('/admin/addresourse',[adminController::class,'resoursePage'])->name('resourse')->middleware('CheckAdmin');
Route::post('/admin/uploadresourse',[FileUploadController::class,'resourseStore'])->middleware('CheckAdmin');

Route::post('/admin/uploadcourse',[FileUploadController::class,'store'])->name('upload')->middleware('CheckAdmin');


Route::get('/admin/addblogs',[blogController::class,'addblog'])->name('addblog')->middleware('CheckAdmin');
Route::post('/admin/addblogs',[blogController::class,'store'])->middleware('CheckAdmin');
Route::get('/admin/blogDetails',[blogController::class,'detail'])->name('detail')->middleware('CheckAdmin');
Route::post('/admin/blog/delete/{id}',[blogController::class,'blogDelete'])->middleware('CheckAdmin');
Route::post('/admin/blog/edit/{id}',[blogController::class,'blogEdit'])->middleware('CheckAdmin');
Route::post('/admin/edit/{id}',[blogController::class,'edit'])->middleware('CheckAdmin');

Route::get('/admin/allcourses',[CourseController::class,'deleteCourse'])->name('deleteCourse')->middleware('CheckAdmin');
Route::post('/admin/course/delete/{id}',[CourseController::class,'delete'])->middleware('CheckAdmin');


Route::get('/courses/{type}',[CourseController::class,'index'])->middleware('auth');
Route::get('/coueselist/{id}',[CourseController::class,'courselist'])->middleware('auth');

