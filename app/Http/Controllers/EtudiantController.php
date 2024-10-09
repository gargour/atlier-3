<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function update (Request $request , Etudiant $etudiant )
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe_id'=>'required',
        ]);
        $etudiant->validate([
            'nom'=>'required'->nom,
            'prenom'=>'required'->prenom,
            'classe_id'=>'required'->classe_id
        ]);
        return redirect()->route('etudaint')
                         ->with('success','Student updated successfully');
    }
}
