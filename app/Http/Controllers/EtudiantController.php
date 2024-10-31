<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{ 
  /*  public function edit(Etudiant $etudiant){
        $classes=Classe::all();

        return view('edit', compact('etudiant','classes'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe_id'=>'required'
        ]);
        $etudiant->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'classe_id'=>$request->classe_id
        ]);
        return redirect ()->route('etudiant')
                          ->with ('sucess','Student updated succesfully');
    } */

    public function delete (Etudiant $etudiant){
        $etudiant-> delete();
        return redirect()->route('etudiant')
                         ->with('success','Post deleted successfully');
    }
}
