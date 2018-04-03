<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjetsController extends Controller
{

    /**
     * Display the create form
     *
     * @return Response
     */
    public function create()
    {
        return view('tweets.create');
    }
}
