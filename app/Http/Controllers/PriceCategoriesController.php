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

                'tnt_file_path' => 'required|mimes:xlx,xlsx,xlsm,xlsb,xls|max:10020',
                'price_category_name'=>'required|string',
                'fedex_file_path' => 'required|mimes:xlx,xlsx,xlsm,xlsb,xls|max:10020',
    
            ]);
           
          

            // Fedex Import

            $originalNameFDX = $request->fedex_file_path; 
            $fileNameFDX = "MADNI-FEDEX".rand(11111,99999).time().'.'.$request->fedex_file_path->extension(); 
            $request->fedex_file_path->move(public_path('uploads'), $fileNameFDX); 
           

             // TNT Import

             $originalNameTNT = $request->tnt_file_path; 
             $fileNameTNT = "MADNI-TNT".rand(11111,99999).time().'.'.$request->tnt_file_path->extension();
             $request->tnt_file_path->move(public_path('uploads'), $fileNameTNT); 
             
             
            

        

            $pricecategory = PriceCategory::create([
                'price_category_name' => $request->price_category_name,
                'fedex_file_path' =>  $fileNameFDX,
                'fedex_file_name' => $fileNameFDX,
                'tnt_file_path' =>     $fileNameTNT,
                'filename' =>  $originalNameTNT


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
        $price = PriceCategory::findOrFail($id);
        $price->delete();
        return back()->with('success','Deleted!');
    }
}
