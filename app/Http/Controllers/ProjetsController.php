<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Projets;

class ProjetsController extends Controller
{

    /**
     * Display the create form
     *
     * @return Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store the newly created resource in DB
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['description' => 'required|string|max:140']);
        
        $projet = new Projets();
        
        $projet->description = $request->content;
        
        $projet->save();
        
    }
}
