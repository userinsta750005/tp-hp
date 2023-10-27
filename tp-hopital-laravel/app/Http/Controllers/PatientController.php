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

    public function delete($id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return redirect()->route('patientViewAdmin')->with('error', 'Patient non trouvé.');
        }

        $patient->delete();

        return redirect()->route('patientViewAdmin')->with('success', 'Le patient a été supprimé avec succès.');
    }

    public function edit($id)
{
    $patient = Patient::find($id);

    if (!$patient) {
        return redirect()->route('patientViewAdmin')->with('error', 'Patient non trouvé.');
    }

    return view('admin.patient.editPatient', ['patient' => $patient]);
}

public function update(Request $request, $id)
{
    $patient = Patient::find($id);

    if (!$patient) {
        return redirect()->route('patientViewAdmin')->with('error', 'Patient non trouvé.');
    }

    // Validez le formulaire comme d'habitude et mettez à jour le patient
    $this->validate($request, [
        // Vos règles de validation
    ]);

    // Mettez à jour les attributs du patient avec les nouvelles valeurs
    $patient->update($request->all());

    return redirect()->route('patientViewAdmin')->with('success', 'Le patient a été mis à jour avec succès.');
}

}