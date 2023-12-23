<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khsing\World\World;
use Khsing\World\Models\Continent;
use Illuminate\Support\Facades\Input;
use App\PriceCategory;
use App\Customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::with('category')->orderBy('created_at','desc')->get();
        //$lists = $customers->category();

      //  dd($customers);
     // $customers = $customerLists->category();
        return view('pages.customers.index',compact(['customers']));
    }

    public function create(){
        $countries = World::Countries();
        $pricecategories = PriceCategory::all()->sortByDesc("created_at");
       

        return view('pages.customers.create',compact('countries','pricecategories'));
    }

    public function store(Request $request){

        $request->validate([

            'fullname' => 'required|string',
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
            'price_categories_id'=>$request->price_category,
            'account_no' => $request->account_no

        ]);

        if($customer)
        {
            return redirect()->route('customers.index')->with('success','User Created Successfully');
        }

        return back()->with('error','Something Went Wrong!');
       
       
    }

    public function edit($id){
        $customer = Customer::findOrFail($id);
        $countries = World::Countries();
        $pricecategories = PriceCategory::all()->sortByDesc("created_at");
       // dd($pricecategories);
        return view('pages.customers.edit',compact(['customer','countries','pricecategories']));
    }

    public function update(Request $request,$id){

        $customer = Customer::findOrFail($id);


        if($request->mobile == $customer->mobile || $request->email || $customer->email)
        {
            $request->validate([

                'fullname' => 'required|string|max:30',
                'gstin'=>'string',
                'country'=>'required',
                'state'=>'required|string',
                'pincode'=> 'required|numeric',
                'address' => 'string',
                'price_category'=>'required'
    
            ]);
        }
        else{
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
        }

        $data =$request->input();

        $customer->update($data);

        return back()->with('success','Profile Updated Successfully');
    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return back()->with('error','Customer Deleted Successfully!');
    }
}
