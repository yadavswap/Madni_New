<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\CustomerInvoice;
use App\PriceCategory;

class DashboardController extends Controller
{
    //


    public function index(){ 
        $totalinvoicecount = CustomerInvoice::all()->count();
        $customerscount = Customer::all()->count();
        $pricecategorycount = PriceCategory::all()->count();
        $invoices = CustomerInvoice::with('customer')->where('invoice_date',date('d/m/Y'))->orderBy('created_at','desc')->get();
        return view('dashboard',compact(['customerscount','pricecategorycount','totalinvoicecount','invoices']));
    }

    public function logout(){

       
            Auth::logout();

          return  redirect('/login');
   
       

      

    
    }
}
