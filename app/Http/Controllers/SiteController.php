<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;


class SiteController extends Controller
{
    public function first(){
        return view('form.default');
    }
    public function linghali(){
        return view('form.linghaliform');
    }

    public function formtable(){
        $allrecords = Record::all();

        return view('recorddata.index',compact('allrecords'));
    }
}
