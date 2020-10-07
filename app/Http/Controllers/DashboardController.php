<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\PriceCategory;

class DashboardController extends Controller
{
    //


    public function index(){ 
        $totalinvoicecount = 0;
        $customerscount = Customer::all()->count();
        $pricecategorycount = PriceCategory::all()->count();
        return view('dashboard',compact(['customerscount','pricecategorycount','totalinvoicecount']));
    }

    public function logout(){

       
            Auth::logout();

          return  redirect('/login');
   
       

      

    
    }
}
