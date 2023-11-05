<?php

use App\Models\UserComments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('submitted', function () {
//     return view('submitted');
// });

Route::get('index',[UserController::class,'index'])->name('index');
Route::get('submitted',[UserController::class,'submitted'])->name('submitted');
Route::post('store/{id}',[UserController::class,'store'])->name('store');
Route::post('update/{id}',[UserController::class,'update'])->name('update');
Route::get('edit/{id}',[UserController::class,'edit'])->name('edit');
Route::get('delete/{id}',[UserController::class,'delete'])->name('delete');
