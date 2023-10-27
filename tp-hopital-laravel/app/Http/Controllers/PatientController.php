<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function createPatient(Request $request){
        $this->validate($request, [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_de_naissance' => 'required|date',
            'adresse' => 'required|string',
            'tel' => 'required|integer',
            'ailment' => 'required|string',
            'age' => 'required|integer',
        ]);

        $patient = new Patient();
        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->date_de_naissance = $request->date_de_naissance;
        $patient->adresse = $request->adresse;
        $patient->tel = $request->tel;
        $patient->ailment = $request->ailment;
        $patient->age = $request->age;
        $patient->save(); 

        return redirect()->route('patientViewAdmin');
    }
}