<?php
use Illuminate\Support\Facades\Route; // FIXME no serve è ereditato

Route::get('/', function () {
    $projets = App\Projets::all();
    return view('index', [
        'projets' => $projets
    ]);
});

Route::get('tweets/create', 'TweetsController@create');
        
        