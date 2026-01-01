<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
     protected $fillable =[
    'Firstname',
    'Middlename',
    'Lastname',
    'PerDistrict',
    'PerStreet',
    'PerCity',
    'PerDistrict',
    'PerStreet',
    'PerCity',
    'Joindate',
    'Email',
    'Contact'
     ];
}
