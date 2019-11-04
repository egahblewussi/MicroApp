<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    public function create(){
        return view('Administration.profil');
    }

    public function list() {
     $profil = Profil ::all();
     return view('Administration.datatables.profils', ['profils' => $profil]);

    }

    public function store(Request $request){
        $this->validate($request,[
            'libelle'=> 'required',
            'description'=> 'required',
        ]);
        $profil = new Profil;
        $profil -> libelle = $request->input('libelle');
        $profil -> description = $request->input('description');
        $profil->save();
        return redirect('/domaines')-> with('info','Profil enregistrer avec succès');
    }

}
