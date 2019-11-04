<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Compte;
use App\Cotisation;

class CotisationController extends Controller
{
    public function create()
    {
        $comptes = Compte:: all();

        return view('pages.cotisation', ['comptes' => $comptes]);
    }

    public function list()
    {
        $cotisation = Cotisation :: all();

        return view('Administration.datatables.cotisations', ['cotisations' => $cotisation]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mise' => 'required',
            'compte_id' => 'required',
        ]);

        $cotisation = new Cotisation();
        $cotisation->operation = 'dépot';
        $cotisation->mise = $request->input('mise');
        $cotisation->compte_id = $request->input('compte_id');

        $compte = Compte::findOrFail($request->input('compte_id'));

        $mont = $compte->montantJournalier;

        $cotisation->montant = $mont * $request->input('mise');

        $cotisation->save();

        //mise a jour automatique de la solde

        $soldeT = $compte->solde + $cotisation->montant;

        DB::table('comptes')->where('id', $request->input('compte_id'))->update(array('solde' => $soldeT));

        return redirect('/cotisations')->with('info', 'Client enregistrer avec succès');
    }

    public function retrait()
    {
        $comptes = Compte:: all();

        return view('pages.retraitTontine', ['comptes' => $comptes]);
    }

    public function storeRetraitT(Request $request)
    {
        $this->validate($request, [
            'montant' => 'required',
            'compte_id' => 'required',
        ]);

        $cotisation = new Cotisation();
        $cotisation->operation = 'Retrait';
        $cotisation->montant = $request->input('montant');
        $cotisation->compte_id = $request->input('compte_id');

        $cotisation->save();

        //mise a jour automatique de la solde

        $compte = Compte::findOrFail($request->input('compte_id'));

        $soldeT = $compte->solde - $cotisation->montant;

        DB::table('comptes')->where('id', $request->input('compte_id'))->update(array('solde' => $soldeT));

        return redirect('/cotisations')->with('info', 'Client enregistrer avec succès');
    }
}
