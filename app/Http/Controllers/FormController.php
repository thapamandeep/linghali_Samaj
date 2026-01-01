<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class FormController extends Controller
{
 public function store(Request $request){
    $data = $request->validate([
        'firstName' => 'required|string',
        'middleName' => 'required|string',
        'lastName' => 'required|string',
        'perDistrict' => 'required|string',
        'perStreet' => 'required|string',
        'perCity' => 'required|string',
        'tampDistrict' => 'required|string',
        'tampStreet' => 'required|string',
        'tampCity' => 'required|string',
        'date' => 'required|date',
        'email' => 'required|string|email',
        'contactNumber' => 'required|integer',
        'message' => 'required|string',

    ]);
   


     $record = new Record();
     $record -> Firstname = $data['firstName'];
     $record -> Middlename = $data['middleName'];
     $record -> Lastname = $data['lastName'];
     $record -> PerDistrict = $data['perDistrict'];
     $record -> PerStreet = $data['perStreet'];
     $record -> PerCity = $data['perCity'];
     $record -> TampDistrict = $data['tampDistrict'];
     $record -> TampStreet = $data['tampStreet'];
     $record -> TampCity = $data['tampCity'];
     $record -> Joindate = $data['date'];
     $record -> Joindate = $data['date'];
     $record -> Email = $data['email'];
     $record -> Contact = $data['contactNumber'];
     $record -> Message = $data['message'];

     $record->save();

     return view('form.linghaliform');
   
 } 
}
