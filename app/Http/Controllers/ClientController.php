<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Agent;

class ClientController extends Controller
{
    public function create()
    {
        $agents = Agent ::all();

        return view('Administration.client', ['agents' => $agents]);
    }

    public function list()
    {
        $clients = Client::all();

        return view('Administration.datatables.clients', ['clients' => $clients]);
    }

    public function list_agent_client()
    {
        $client_agents = Client ::all()->groupBy('agent_id');

        return view('Administration.datatables.agent_list_client', ['client_agent' => $client_agents]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
               'nom' => 'required',
               'prenoms' => 'required',
               'profession' => 'required',
               'email' => 'required',
               'contact' => 'required',
               'adresse' => 'required',
               'PersReference' => 'required',
               'agent_id' => 'required',
           ]);

        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prenoms = $request->input('prenoms');
        $client->profession = $request->input('profession');
        $client->contact = $request->input('contact');
        $client->adresse = $request->input('adresse');
        $client->email = $request->input('email');
        $client->PersReference = $request->input('PersReference');
        $client->agent_id = $request->input('agent_id');

        if ($request->hasFile('pic_file')) {
            $photo = Input::file('pic_file');
            $nomFichier = now()->timestamp.'.'.$photo->getClientOriginalExtension();
            $photo->storeAs('client', $nomFichier, 'public');

            dd($nomFichier);

            $client->photo = $nomFichier;
        }

        $client->save();

        return redirect('/clients')->with('info', 'Client enregistrer avec succès');
    }
}
