<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FormController;

Route::get('/',[SiteController::class,'first'])->name('openpage');
Route::get('/form-page',[SiteController::class,'linghali'])->name('formpage');
Route::get('/table-form',[SiteController::class,'formtable'])->name('peopleRecord');

// for store data
Route::post('/form-register',[FormController::class,'store'])->name('formRegister');

// for edit data
Route::get('/data-edit/{record}',[SiteController::class,'editData'])->name('dataEdit');

// for delete data
Route::get('/data-delete/{record}',[SiteController::class,'deleteData'])->name('dataDelete');

