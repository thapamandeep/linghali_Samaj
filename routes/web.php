<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FormController;

Route::get('/',[SiteController::class,'first'])->name('openpage');
Route::get('/form-page',[SiteController::class,'linghali'])->name('formpage');
Route::post('/form-register',[FormController::class,'store'])->name('formRegister');
