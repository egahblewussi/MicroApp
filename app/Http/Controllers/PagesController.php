<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agent;
use App\Client;
use App\Compte;


class PagesController extends Controller
{
   public function home(){
      $tontine = DB::table('comptes')->where('natureCompte','=','Tontine')->get();
      $compte = DB::table('comptes')->where('natureCompte','=','Tontine')->get();
      $agents = Agent :: all();
      $nbr_agent = Agent ::count();
      $nbr_client = Client ::count();
      $nbr_compte= Compte ::count();
      $nbr_solde= Compte ::sum('solde');
       return view('Administration.accueil_Admin',['agents' => $agents])->with([
                                                                                'nbrA' => $nbr_agent,
                                                                                'nbrC' => $nbr_client,
                                                                                'nbrCo' => $nbr_compte,
                                                                                'nbrS' => $nbr_solde
                                                                                ]);
   }

   public function client(){
    return view('Administration.client');
    }

    public function resetPass(){
        return view('forget_password');
        }

}
