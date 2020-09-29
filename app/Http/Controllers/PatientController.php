<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientcreate(){
        $patients = Patient::all();
        
         return view('admin\patientdeck')->with('patients',$patients);
     }
}
