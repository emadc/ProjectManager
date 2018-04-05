<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('projets/create/{user}', 'ProjetsController@create');

Route::post('projets', 'ProjetsController@store');
        
Route::get('projets/', 'ProjetsController@index');

Route::get('projets/{projet}/edit', 'ProjetsController@edit');

Route::put('projets/{projet}', 'ProjetsController@update');

Route::delete('projets/{projet}', 'ProjetsController@destroy');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::get('users/{user}', 'UsersController@show');//FIXME Route::get('projets/{projet}', 'UsersController@show');
