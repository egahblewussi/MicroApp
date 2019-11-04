<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Compte;

class CompteController extends Controller
{
    public function create()
    {
        $client = Client ::all();

        return view('pages.compte', ['clients' => $client]);
    }

    public function list()
    {
        $comptes = Compte ::all();

        return view('Administration.datatables.comptes', ['comptes' => $comptes]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
               'numero' => 'required',
               'mise' => 'required',
               'client_id' => 'required',
           ]);

        $compte = new Compte();
        $compte->numero = $request->input('numero');
        $compte->natureCompte = 'Tontine';
        $compte->solde = 10000;
        $compte->montantJournalier = $request->input('mise');
        $compte->client_id = $request->input('client_id');
        $compte->save();

        return redirect('/comptelist')->with('info', 'Client enregistrer avec succès');
    }
}
