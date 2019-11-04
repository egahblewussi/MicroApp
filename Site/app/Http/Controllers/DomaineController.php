<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DomaineAction;

class DomaineController extends Controller
{
    public function create () {
        return view('Administration.domaine');
    }

    public function list() {
        $domaineAction = DomaineAction ::all();
        return view('Administration.datatables.domaines', ['domaineActions' => $domaineAction]);
       }
   
       public function store(Request $request){
           $this->validate($request,[
               'libelle'=> 'required'
           ]);
           $domaineAction = new DomaineAction;
           $domaineAction -> libelle = $request->input('libelle');
           $domaineAction -> description = $request->input('description');
           $domaineAction->save();
           return redirect('/domaines')-> with('info','Profil enregistrer avec succès');
       }

}
