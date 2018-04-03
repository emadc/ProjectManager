<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route; // FIXME no serve è ereditato

Route::get('/', function () {
    $projets = DB::table('projets')->get();
    return view('index', ['projets' => $projets]);
});

Route::get('/projects', function () {
    return view('welcome');
});


        
        