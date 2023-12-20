<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fonctionnaire;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function dologin (Request $request):RedirectResponse
    {
        
        $credentials = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
        ]);

        dd(Auth::attempt($credentials));
            
        
    }
}
