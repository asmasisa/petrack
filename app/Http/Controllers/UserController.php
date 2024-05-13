<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function User() {
        
            return view('Pages.User');
        
    }

    public function Accueil() {
        return view('PagesUser.Accueil');
    }
    public function Messagerie() {
        return view('PagesUser.Messagerie');
    }
    public function Param() {
        return view('PagesUser.Param');
    }
    public function planning() {
        return view('PagesUser.planning');
    }
}