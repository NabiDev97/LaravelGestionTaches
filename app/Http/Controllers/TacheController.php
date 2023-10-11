<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tache;

class TacheController extends Controller
{
    public function lister_tache(){
        $taches=Tache::all();
        return view('tache.liste',compact('taches'));
    }
    public function ajouter_tache(){
        return view('tache.ajouter');
        
    }
    public function ajouter_tache_traitement(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $tache= new Tache();
        $tache->name=$request->name;
        $tache->description=$request->description;
        $tache->save();
        return redirect('/ajouter')->with('status','enregistrement effectuer avec succes');

    }
}
