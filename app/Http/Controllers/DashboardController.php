<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    //


    public function index(){ 
        return view('dashboard');
    }

    public function logout(){

        if(Auth::user())
        {
            Auth::logout();

            redirect('/login');
        }

        redirect('/dashboard');

      

    
    }
}
