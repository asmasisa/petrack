<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {

        if (Auth::user()->usertype == 'user')
         {
            return view('Pages.User');
    
    



    } else if (Auth::user()->usertype == 'veterinaire')
    {
       return view('veto.createcompte');
       
}
    
    
    
    
    
    else   {
        return view('Pages.Admin');
    }
    
    }
    
}
