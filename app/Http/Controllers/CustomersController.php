<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khsing\World\World;
use Khsing\World\Models\Continent;
use App\PriceCategory;

class CustomersController extends Controller
{
    public function index(){
        return view('pages.customers.index');
    }

    public function create(){
        $countries = World::Countries();
        $pricecategories = PriceCategory::all()->sortByDesc("created_at");
       

        return view('pages.customers.create',compact('countries','pricecategories'));
    }

    public function store(Request $request){

        $request->validate([

            'fullname' => 'required|string|max:30',
            'mobile' => 'required|string|max:10',



        ]);
        return view('pages.customers.index');
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
