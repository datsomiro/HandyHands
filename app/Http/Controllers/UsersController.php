<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        
        $users = Users::get();

        if($users->count() === 0){
            return 'no users';
        }

        return view('users/index', compact('users'));
    }

    public function show($id)
    {
        $users = Users::findOrFail($id);

        return view('users/show', compact('users'));

    }

    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {

        $user = new Users;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->save();


        Users::create($request->all());
        return redirect(action('UsersController@index'));
    }
}
