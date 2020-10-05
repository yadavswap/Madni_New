<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khsing\World\World;
use Khsing\World\Models\Continent;

class CustomersController extends Controller
{
    public function index(){
        return view('pages.customers.index');
    }

    public function create(){
        $countries = World::Countries();
       

        return view('pages.customers.create',compact('countries'));
    }

    public function store(Request $request){
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
