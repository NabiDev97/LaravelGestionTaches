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
   
    public function update_tache($id){
    $taches = Tache::find($id);
    return view('tache.update', compact('taches'));
}


    public function update_tache_traitement(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $tache= Tache::find($request->id);
        $tache->name=$request->name;
        $tache->description=$request->description;
        $tache->update();
        $tache->save;
        return redirect('/update')->with('status','Modification effectuer avec succes');

    }
    public function delete_tache($id){

         $tache= Tache::find($id);
        // return dd($tache);
        $tache->delete();
        return redirect('/update')->with('status','Suppression effectuer avec succes');
    }
}
