<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    public function create(){
        return view('Administration.agent');
    }

    public function list() {
        $agents = Agent ::all();
        return view('Administration.datatables.agents', ['agents' => $agents]);
    }  

       public function store(Request $request){
           $this->validate($request,[
               'nom'=> 'required',
               'prenoms'=> 'required',
               'profession'=> 'required',
               'contact'=> 'required',
               'email'=> 'required',
               'adresse'=> 'required',  
           ]);     
           $agent = new Agent;
           $agent -> nom = $request->input('nom');
           $agent -> prenoms = $request->input('prenoms');
           $agent -> profession = $request->input('profession');
           $agent -> contact = $request->input('contact');
           $agent -> email = $request->input('email');
           $agent -> adresse = $request->input('adresse');    
           $agent->save();
           return redirect('/agents')-> with('info','Agents enregistrer avec succès');
       }

}
