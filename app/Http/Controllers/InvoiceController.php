<?php


/*

Author: Shantanu Kulkarni
Date: 13/10/2020
Github: @heyshantu13

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerInvoice;
use App\PriceCategory;
use App\Customer;
use App\TntPrice;
use Khsing\World\World;
use App\Exceptions\Handler;



class InvoiceController extends Controller
{
    //

    public function index(){

        $invoices = CustomerInvoice::all()->sortByDesc("created_at");
        return view('pages.invoice.index',compact('invoices'));

    }

    public function create($id = null){

        // Check if customer available or not

        $customers = Customer::all()->sortByDesc("created_at");

        if($id){
            $customerbyid = Customer::findOrFail($id);
            $pricecategory = PriceCategory::findorFail($customerbyid->price_categories_id);
            return view('pages.invoice.details',compact(['customers','customerbyid','id']));

        }

        else{
            $id = 0;
            return view('pages.invoice.details',compact(['customers','id']));
        }

    }


    public function newInvoice(Request $request){

        $request->validate([
            'customer_id' => 'required',
            'type' => 'required',
            'provider' => 'required',
            'class' => 'required'
        ]);

            $customerdetails = Customer::findOrFail($request->customer_id);
            $is_express = $request->class;
            $is_import = $request->type;
            $countries = World::Countries();
        


        /*

        1 Type
            a. Import > 1
            b. Export > 2
         
         2 Provider
            a. TNT > 1
            b. Fedex > 2   

        */

 
        if($request->provider == 1) {
        //     TNT Provider
        // Check For Type

            if($request->type == 0){
                //  TNT Export

                $tntimport = [
                    'provider' => "TNT",
                    'type' => "Export",
                    "class" => ($request->class) ? ("Express") : ("Economy"),
                    'provider_id' => $request->provider,
                    'type_id' => $request->type,
                    'class_id' => $request->class

                ];
               

                $pricelists = TntPrice::where('price_categories_id',$customerdetails->price_categories_id)
                ->where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->get();

                
                $zones =  TntPrice::where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->orderBy('zone', 'ASC')
                ->get()
                ->unique('zone');
                

                if(!$pricelists){
                    return back()->with('error','Data Not Available Right Now! Please Update Sheet');
                }


                return view('pages.invoice.newinvoice',compact(['pricelist','customerdetails','countries','zones','tntimport']));

              //  return $pricelists;



            }

            if($request->type == 1){
                //  TNT Import

                $tntimport = [
                    'provider' => "TNT",
                    'type' => "Import",
                    "class" => ($request->class) ? ("Express") : ("Economy"),
                    'provider_id' => $request->provider,
                    'type_id' => $request->type,
                    'class_id' => $request->class
                ];
                
                $pricelists = TntPrice::where('price_categories_id',$customerdetails->price_categories_id)
                ->where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->get();

              

                $zones =  TntPrice::where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->orderBy('zone', 'ASC')
                ->get()
                ->unique('zone');

                if(!$pricelists){
                    return back()->with('error','Data Not Available Right Now! Please Update Sheet');
                }
                return view('pages.invoice.newinvoice',compact(['pricelist','customerdetails','countries','zones','tntimport']));
            }
            
         
          }

         if($request->provider == 2)
         {
            //  Fedex Provider

             // Check For Type

             if($request->type == 0){
                //  TNT Import

                return "FedeX IMPORT";

            }

            if($request->type == 1){
                //  TNT Export
                
                return "FedeX EXPORT";
            }
         } 



       

    }

    public function store(Request $request){
       // dd($request);

        $invoice = CustomerInvoice::create([
            'customer_id' => $request->customer_id,
            'price_categories_id' => $request->price_categories_id,
            'state_code' => $request->statecode,
            'invoice_date'=> $request->invoice_date,
            'gross_amount'=> $request->gross_amount,
            'fuel_surcharge' => $request->fuel_surcharge,
            'enhance_security_charge' => $request->enhance_security_charge,
            'custom_clearance' => $request->custom_clearance,
            'oda_charge' => $request->oda_charge,
            'adc_noc_charge' => $request->adc_noc_charge,
            'do_charge'=> $request->do_charges,
            'non_conveyar_charge' => $request->non_conveyar_charge,
            'address_correction_charge' => $request->address_correction_charge,
            'war_surcharge' => $request->war_surcharge,
            'warehousing_charge' => $request->warehousing_charge,
            'ad_code_registration_charge' => $request->ad_code_registration_charge,
            'air_cargo_registration_charge' => $request->air_cargo_registration_charge,
            'gst_percentage' => 18,
            'cgst_amount' => $request->cgst,
            'sgst_amount'=> $request->sgst,
            'igst_amount'=> $request->igst,
            'is_express' => $request->class_id,
            'is_import' => $request->type_id,
            'provider' => $request->provider_id,
            'net_amount' => $request->net_amount

        ]);
       
       
        return $request;
    }
}
