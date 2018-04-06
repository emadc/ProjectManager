<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{

    /**
     * Display user profile.
     *
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        $projets = $user->projet()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('users.show', compact('user', 'projets'));
    }

    /**
     * Display an index of the resource
     *
     * @return Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        
        return view('users.index', compact('users'));
    }

    /**
     * Display the create form
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        
        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        
        $user->save();
        
        return redirect('users/' . $user->id);
    }

    /**
     * Edit the given resource
     *
     * @param integer $id
     * @return Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ];
        
        if ($request->has('password')) {
            $rules['password'] = 'required|min:6|confirmed';
        }
        
        $this->validate($request, $rules);
        
        $user->name = $request->name;
        $user->email = $user->email;
        
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        
        $user->save();
        
        return redirect('users/' . $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        
        return redirect()->to('users/');
    }
}
