<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Patient;

class PatientController extends Controller
{
    public function createPatient(){
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_de_naissance' => 'required|date',
            'adresse' => 'required|sting',
            'tel' => 'required|integer',
            'aliment' => 'required|string',
        ]);

        $patient = new Patient;
        $patient->nom = $validatedData['nom'];
        $patient->prenom = $validatedData['prenom'];
        $patient->date_de_naissance = $validatedData['date_de_naissance'];
        $patient->adresse = $validatedData['adresse'];
        $patient->tel = $validatedData['tel'];
        $patient->ailment = $validatedData['ailment'];
        $patient->age = $validatedData['age'];
        $patient->save(); 

        // return redirect()->route('page-de-confirmation');
    }
}
