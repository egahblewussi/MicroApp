<?php

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home',
]);

Route::get('/login', 'HomeController@index')->name('home');

//---------------------------------PROFIL------------------------------------------------

Route::get('/profil', 'ProfilController@create')->name('profil-create');

Route::post('/profil', 'ProfilController@store')->name('profil-store');

Route::get('/profils', 'ProfilController@list')->name('profil-list');

//--------------------------USER-----------------------------------------------------------------

Route::get('/user', 'UserController@user')->name('user_path');

//----------------------------CLIENT----------------------------------------------------------------

Route::get('/clientCreate', 'ClientController@create')->name('client_create');

Route::post('/client', 'ClientController@store')->name('client_store');

Route::get('/clients', 'ClientController@list')->name('client_list');

//---------------------------------                 ------------------------------------------------

Route::get('/forget', 'PagesController@resetPass')->name('reset_path');

//--------------------------------------DOMAINE---------------------------------------------------------

Route::post('/domaine', 'DomaineController@store')->name('domaine-store');

Route::get('/domaine', 'DomaineController@create')->name('domaine-create');

Route::get('/domaines', 'DomaineController@list')->name('domaine-list');

//-------------------------------AGENT----------------------------------------------------------------

Route::get('/agentCreate', 'AgentController@create')->name('agent-create');

Route::post('/agent', 'AgentController@store')->name('agents-store');

Route::get('/agents', 'AgentController@list')->name('agents-list');

//-------------------------------COMPTE----------------------------------------------------------------

Route::get('/compteCreate', 'CompteController@create')->name('compte-create');

Route::post('/compteStore', 'CompteController@store')->name('compte-store');

Route::get('/comptes', 'CompteController@list')->name('compte-list');

//-----------------------------COTISATION---------------------------------------------------------------

Route::get('/cotisationCreate', 'CotisationController@create')->name('cotisation-create');

Route::get('/retraitCreate', 'CotisationController@retrait')->name('retrait-create');

Route::get('/cotisations', 'CotisationController@list')->name('cotisation-list');

Route::post('/cotisation_store', 'CotisationController@store')->name('cotisation-store');

Route::post('/retraitT_store', 'CotisationController@storeRetraitT')->name('retraitT-store');

Route::get('/agent_list', 'ClientController@list_agent_client')->name('agent_client_list');

Route::get('/log', function () {
    return view('log');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/print', function () {
    return view('print');
});

Route::get('/compte', function () {
    return view('compte');
});

Auth::routes();
