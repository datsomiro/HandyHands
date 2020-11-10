<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthenticatedSessionController extends Controller
{
     public function create(){
        return view ('auth.login');
        }
   
        
}