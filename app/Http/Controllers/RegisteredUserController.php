<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisteredUserController extends Controller
{
    public function create(){
        return view ('auth.register');
        }
}
