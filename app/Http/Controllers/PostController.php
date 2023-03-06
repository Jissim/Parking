<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function register()
    {
        return view ('auth.register');
    }

    public function Accueil()
    {
        return view ('Accueil');
    }

    
}
