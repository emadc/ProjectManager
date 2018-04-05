<?php
use Illuminate\Support\Facades\Route; // FIXME no serve è ereditato

Route::get('/', function () {
    $projets = App\Projet::all();
    
    return view('index', [
        'projets' => $projets
    ]);
});

Route::get('/desc', function () {
    $projets = App\Projet::orderBy('created_at', 'desc')->get();
    
    return view('index', [
        'projets' => $projets
    ]);
});

Route::get('/asc', function () {
    $projets = App\Projet::orderBy('created_at', 'asc')->get();
    
    return view('index', [
        'projets' => $projets
    ]);
});

Route::get('projets/create', 'ProjetsController@create');

Route::post('projets', 'ProjetsController@store');
        
Route::get('projets/', 'ProjetsController@index');

Route::get('projets/{id}/edit', 'ProjetsController@edit');

Route::put('projets/{id}', 'ProjetsController@update');

Route::delete('projets/{id}', 'ProjetsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index');
