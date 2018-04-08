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

Route::get('projets/', 'ProjetsController@index');
	
Route::get('projets/create', 'ProjetsController@create');

Route::get('projets/{projet}', 'UsersController@show');

Route::get('projets/{projet}/edit', 'ProjetsController@edit');

Route::put('projets/{projet}', 'ProjetsController@update')->middleware('can:update,App\Projet');

Route::delete('projets/{projet}', 'ProjetsController@destroy')->middleware('can:delete,App\Projet');

Route::post('projets', 'ProjetsController@store');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

//Route::get('users/{user}', 'UsersController@show');//FIXME Route::get('projets/{projet}', 'UsersController@show');

Route::get('users/', 'UsersController@index')->middleware('can:list,App\User');
Route::get('users/create', 'UsersController@create')->middleware('can:create,App\User');
Route::get('users/{user}', 'UsersController@show')->middleware('can:view,App\User');
Route::get('users/{user}/editprofile', 'UsersController@editProfile')->middleware('can:update,App\User');
Route::post('users/{user}', 'UsersController@update')->middleware('can:update,App\User');
Route::post('users', 'UsersController@store')->middleware('can:create,App\User');
Route::delete('users/{user}', 'UsersController@destroy')->middleware('can:delete,App\User');


