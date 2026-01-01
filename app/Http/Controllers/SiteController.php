<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function first(){
        return view('form.default');
    }
    public function linghali(){
        return view('form.linghaliform');
    }
}
