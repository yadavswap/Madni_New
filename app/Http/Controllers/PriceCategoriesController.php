<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PriceCategory;

class PriceCategoriesController extends Controller
{
    //

    public function index(){
        $pricecategory = PriceCategory::all()->sortByDesc('created_at');
        return view('pages.pricecategory.index',compact('pricecategory'));
    }

    public function create(){
        $countries = null;
       

        return view('pages.pricecategory.create',compact('countries'));
    }

    public function store(Request $request){

      //  dd($request->file_path);

       
            $request->validate([

                'file_path' => 'required|mimes:xlx,xlsx,xlsm,xlsb,xls|max:10020',
                'price_category_name'=>'required|string'
    
            ]);
            $originalName = $request->file_path;  
            $fileName = "MADNI-".rand(11111,99999).time().'.'.$request->file_path->extension();  
            $request->file_path->move(public_path('uploads'), $fileName);
        

            $pricecategory = PriceCategory::create([
                'file_path' => $fileName,
                'price_category_name' => $request->price_category_name,
                'filename'=>  $fileName
            ]);

            return back()->with('success','You have successfully created category and upload file.');


            



       
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
