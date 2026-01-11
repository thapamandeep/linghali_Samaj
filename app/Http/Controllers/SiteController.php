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

        return view('recorddata.dataView',compact('allrecords'));
    }

    // for  edit data
    public function editData(Record $record){
         return view('recorddata.dataEdit', compact('record'));
    }

    // for delete data
    public function deleteData(Record $record){
    $record->delete();
    $allrecords = Record::all();
    return redirect()->route('peopleRecord', compact('allrecords'));
    }
}
