<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khsing\World\World;
use Khsing\World\Models\Continent;
use App\PriceCategory;
use App\Customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all()->category();
        //$lists = $customers->category();

        dd($customers);
        return view('pages.customers.index',compact(['customers']));
    }

    public function create(){
        $countries = World::Countries();
        $pricecategories = PriceCategory::all()->sortByDesc("created_at");
       

        return view('pages.customers.create',compact('countries','pricecategories'));
    }

    public function store(Request $request){

        $request->validate([

            'fullname' => 'required|string|max:30',
            'mobile' => 'required|string|max:10|unique:customers,mobile',
            'email'=> 'required|email|unique:customers,email',
            'gstin'=>'string',
            'country'=>'required',
            'state'=>'required|string',
            'pincode'=> 'required|numeric',
            'address' => 'string',
            'price_category'=>'required'

        ]);

        $customer = Customer::create([
            'fullname' => $request->fullname,
            'mobile' => $request->mobile,
            'email'=> $request->email,
            'gstin'=>$request->gstin,
            'country_id'=>$request->country,
            'state'=>$request->state,
            'pincode'=> $request->pincode,
            'address' => $request->address,
            'price_categories_id'=>$request->price_category

        ]);

        if($customer)
        {
            return back()->with('success','User Created Successfully');
        }

        return back()->with('error','Something Went Wrong!');
       
       
    }

    public function edit($id){
        return view('pages.customers.index');
    }

    public function update(Request $request,$id){
        return view('pages.customers.index');
    }

    public function delete($id){
        return view('pages.customers.index');
    }
}
