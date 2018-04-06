<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Projet;

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
        $this->validate($request, [
            'description' => 'required|string|max:140'
        ]);
        
        $projet = new Projet();
        
        $projet->description = $request->description;
        $projet->titre = $request->titre;
        $projet->user_id = auth()->user()->id;
        $projet->save();
        
        return redirect('/');
    }

    /**
     * Display an index of the resource
     *
     * @return Response
     */
    public function index()
    {
        $projets = Projet::orderBy('created_at', 'desc')->paginate(10);
        
        return view('projets.index', compact('projets'));
    }
    
    /**
     * Edit the given resource
     * @param  integer $id
     * @return Response
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }
    
    /**
     * Update the given resource to storage
     * @param  Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Projet $projet)
    {
        $this->validate($request, ['description' => 'required|string|max:140']);
        
        $projet->description = $request->description;
        $projet->titre = $request->titre;
        
        $projet->save();
        
        return redirect('/');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        Projet::destroy($projet->id);
        
        return redirect('/projets');
    }
    
    
}
