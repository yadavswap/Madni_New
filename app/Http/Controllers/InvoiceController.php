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
use App\InvoiceProduct;
use PDF;
use App\FedexPrice;
use App\Docket;
use Illuminate\Support\Facades\DB;




class InvoiceController extends Controller
{
    //

    public function index(){

        $invoices = CustomerInvoice::with('customer','docket')->orderBy('created_at','desc')->get();
        return view('pages.invoice.index',compact('invoices'));

    }

    public function create($id = null){

        // Check if customer available or not

        $customers = Customer::all()->sortByDesc("created_at");

        if($id){
            $customerbyid = Customer::findOrFail($id);
            $pricecategory = PriceCategory::findorFail($customerbyid->price_categories_id);
            $states = DB::table('world_divisions')->where('country_id',85)->get();
            return view('pages.invoice.details',compact(['customers','customerbyid','id','states']));
        }

        else{
            $id = 0;
            $states = DB::table('world_divisions')->where('country_id',85)->get();
            return view('pages.invoice.details',compact(['customers','id','states']));
        }

    }


    public function newInvoice(Request $request){

        if($request->provider == 0)
        {
            $data = [
                'customer_id' => $request->customer_id,
                'type_id' => $request->type,
                'company_state' => $request->company_state,
                'customer_state' => $request->customer_state
            ];

            return $this->allInvoice($data);
        }

        $request->validate([
            'customer_id' => 'required',
            'type' => 'required',
            'provider' => 'required',
            'class' => 'required',
            'company_state' => 'required',
            'customer_state' => 'required'
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


        //   For Fedex Calculation Start

         if($request->provider == 2)
         {
            //  Fedex Provider

            // Fedex Express

             


          if($request->class == 1)
          {


                if($request->type == 0)
                   {
                        $tntimport = [
                        'provider' => "Fedex",
                        'type' => "Export",
                        "class" => ($request->class) ? ("Express") : ("Economy"),
                        'provider_id' => $request->provider,
                        'type_id' => $request->type,
                        'class_id' => $request->class

                        ];

                          $pricelists = FedexPrice::where('price_categories_id',$customerdetails->price_categories_id)
                ->where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->get();

                
                $zones = FedexPrice::where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->orderBy('zone', 'ASC')
                ->get()
                ->unique('zone');


                     if(!$pricelists){
                    return back()->with('error','Data Not Available Right Now! Please Update Sheet');
                }


                return view('pages.invoice.newinvoice',compact(['pricelist','customerdetails','countries','zones','tntimport']));



                   }
                    

                if($request->type == 1)
                   {
                        // Fedex Import


                      $tntimport = [
                        'provider' => "Fedex",
                        'type' => "Export",
                        "class" => ($request->class) ? ("Express") : ("Economy"),
                        'provider_id' => $request->provider,
                        'type_id' => $request->type,
                        'class_id' => $request->class

                        ];


                        $pricelists = FedexPrice::where('price_categories_id',$customerdetails->price_categories_id)
                ->where('is_import',$is_import)
                ->where('is_express',$is_express)
                ->get();

                  $zones = FedexPrice::where('is_import',$is_import)
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

           if($request->class == 0)
          {
                return back()->with('error','Price Sheet Not Available in This Version');
          }


            // Fedex Express End

            
         } 



       

    }

    public function store(Request $request){
       $i = 0;
       $volumetricwt = 0;

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
            'cgst_amount' =>  round((float)$request->cgst,2),
            'sgst_amount'=> $request->sgst,
            'igst_amount'=> $request->igst,
            'is_express' => $request->class_id,
            'is_import' => $request->type_id,
            'provider' => $request->provider_id,
            'net_amount' => round((float)$request->net_amount,2),
            'tgsc' => $request->tgsc_total,

        ]);

        if($invoice)
        {
            //dd($request->product_details);

           for($i = 0; $i < count($request->product_details["consignment_no"]); $i++){
            $productlists = new InvoiceProduct();
            $productlists->customer_invoice_id = $invoice->id;
            $productlists->consignment_no = $request->product_details["consignment_no"][$i];
            $productlists->referance_no = $request->product_details["referance_no"][$i];
            $productlists->booking_date = $request->product_details["booking_date"][$i];
            $productlists->origin = $request->product_details["origin"][$i];
            $productlists->destination = $request->product_details["destination"][$i];
            $productlists->actual_weight = $request->product_details["actual_weight"][$i];
            $productlists->l = $request->product_details["l"][$i] ?? 0;
            $productlists->w = $request->product_details["w"][$i] ?? 0;
            $productlists->h = $request->product_details["h"][$i] ?? 0;
            $productlists->weight_size_show = $request->product_details["weight_size_show"][$i] ?? 0;
            $productlists->mode = $request->product_details["mode"][$i];
            $productlists->chargable_weight = $request->product_details["chargable_weight"][$i];
            if($request->product_details["mode"][$i] == 0){
                $volumetricwt = ($request->product_details["l"][$i] +  $request->product_details["w"][$i] + $request->product_details["h"][$i])/5000;
            }
            if($request->product_details["mode"][$i] == 1){
                $volumetricwt = ($request->product_details["l"][$i] +  $request->product_details["w"][$i] + $request->product_details["h"][$i])/6000;

            }
          
            $productlists->volumetric_weight = $volumetricwt;
            $productlists->product_type = $request->product_details["product_type"][$i];
            $productlists->zone = $request->product_details["zone"][$i];
            $productlists->amount = $request->product_details["amount"][$i];
            $productlists->star = $request->product_details["star"][$i];
            $saved = $productlists->save();
           }
            
           if($saved)
           {
            return back()->with('success','Invoice Created Successfully.');   
           }
           else{
               $invoice = CustomerInvoice::find($invoice->id);
               $invoice->delete();
               return back()->with('errors','Unable To Save Invoice At That Movement');

             }
        }
        else{
            return back()->with('errors','Unable To Create Invoice At That Movement');
        }
        
       
       
        //return $request;
    }



    public function viewInvoice(Request $request,$id){

        $invoice = CustomerInvoice::where('id',$id)->firstOrFail();
        $customer = Customer::findOrFail($invoice->customer_id);
        $products = InvoiceProduct::where('customer_invoice_id',$invoice->id)->get();
        $amountinword = $this->getIndianCurrency($invoice->net_amount);

        //return view('invoice',compact('invoice','customer','products','amountinword'));
        return view('invoice_new',compact('invoice','customer','products','amountinword'));

        // $pdf = PDF::loadView('invoice');
        // return $pdf->download('customers.pdf');

    }


   public function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . '' : '') . $paise;
}


    public function allInvoice($data){

        $customerdetails = Customer::findOrFail($data['customer_id']);
        $countries = World::Countries();
        $tntZones = TntPrice::orderBy('zone', 'ASC')
                ->get()
                ->unique('zone');
        $fedexZones = FedexPrice::orderBy('zone', 'ASC')
                ->get()
                ->unique('zone');        
                
        return view('pages.invoice.allinvoice',compact('customerdetails','countries','tntZones','fedexZones','data'));
    }


    public function storeAll(Request $request){
        
        $i = 0;
        //$volumetricwt = 0;
        $volumetricwt = [];

        $package_weight = [];
        for($i = 0; $i < count($request->product_details["consignment_no"]); $i++){
            $package = $request->product_details['package'][$i];
            if(!empty($package)) {
                $weight_cacl_field = config('madni.weight_cacl_field');
                foreach($weight_cacl_field as $field) {
                    $fieldData =  $request->product_details["weightcalc"][$field][$i];
                    $filteredField = array_intersect_key($fieldData, array_flip(range(1, $package)));
                    $package_weight[$i][$field] = $filteredField;
                }     
            } else {
                $package_weight[$i] = null;
            }  
            
            // volumetric weight calculation piece wise
            $volumetricwt[$i] = 0;
            if(!empty($package_weight[$i])) {
                for($j=1;$j<=$package;$j++) {
                    if($request->product_details["mode"][$i] == 0){
                        $modedivide = 5000;
                    }
                    if($request->product_details["mode"][$i] == 1){
                        $modedivide = 6000;
                    }
                    $volumetricwt[$i] += ($package_weight[$i]["l"][$j] * $package_weight[$i]["w"][$j] * $package_weight[$i]["h"][$j]) / $modedivide;
                }
            }    
        }
        $invoice = CustomerInvoice::create([
             'customer_id' => $request->customer_id,
             'price_categories_id' => $request->price_categories_id,
             'branch'=> $request->branch,
             'company_state'=> $request->company_state,
             'customer_state'=> $request->customer_state,
             'state_code' => $request->statecode,
             'invoice_date'=> $request->invoice_date,
             'gross_amount'=> $request->gross_amount,
             'fuel_surcharge' => $request->fuel_surcharge,
             //'enhance_security_charge' => $request->enhance_security_charge,
             'enhance_security_charge' => isset($request->enhance_security_charge) ? $request->enhance_security_charge : 0,
             'custom_clearance' => $request->custom_clearance,
             'oda_charge' => $request->oda_charge,
             'adc_noc_charge' => $request->adc_noc_charge,
             'do_charge'=> $request->do_charge,
             'non_conveyar_charge' => $request->non_conveyar_charge,
             'address_correction_charge' => $request->address_correction_charge,
             'war_surcharge' => $request->war_surcharge,
             'warehousing_charge' => $request->warehousing_charge,
             'ad_code_registration_charge' => $request->ad_code_registration_charge,
             'air_cargo_registration_charge' => $request->air_cargo_registration_charge,
             'other_charge' => $request->other_charge,
             'gst_percentage' => 18,
             'cgst_amount' =>  round((float)$request->cgst,2),
             'sgst_amount'=> $request->sgst,
             'igst_amount'=> $request->igst,
             'is_express' => NULL,
             'is_import' => $request->type_id,
             'provider' => "3", // For ALL
             'net_amount' => round((float)$request->net_amount,2),
             'tgsc' => $request->tgsc_total,
             'tgsc_show' => $request->tgsc_show ?? 1,

 
         ]);
 
         if($invoice)
         {
           
             //dd($request->product_details);
 
            for($i = 0; $i < count($request->product_details["consignment_no"]); $i++){
               // dd($request->product_details['provider_id'][$i]);
                $productlists = new InvoiceProduct();
             $productlists->customer_invoice_id = $invoice->id;
             $productlists->consignment_no = $request->product_details["consignment_no"][$i];
             $productlists->provider_id = $request->product_details["provider_id"][$i];
             $productlists->class_id = $request->product_details["class_id"][$i];
             $productlists->referance_no = $request->product_details["referance_no"][$i];
             $productlists->booking_date = $request->product_details["booking_date"][$i];
             $productlists->origin = $request->product_details["origin"][$i];
             $productlists->destination = $request->product_details["destination"][$i];
             $productlists->actual_weight = $request->product_details["actual_weight"][$i];
             $productlists->l = $request->product_details["l"][$i];
             $productlists->w = $request->product_details["w"][$i];
             $productlists->h = $request->product_details["h"][$i];
             $productlists->weight_size_show = $request->product_details["weight_size_show"][$i] ?? 0;
             $productlists->mode = $request->product_details["mode"][$i];
             $productlists->chargable_weight = $request->product_details["chargable_weight"][$i];
             /*if($request->product_details["mode"][$i] == 0){
                 $volumetricwt = ($request->product_details["l"][$i] +  $request->product_details["w"][$i] + $request->product_details["h"][$i])/5000;
             }
             if($request->product_details["mode"][$i] == 1){
                 $volumetricwt = ($request->product_details["l"][$i] +  $request->product_details["w"][$i] + $request->product_details["h"][$i])/6000;
 
             }*/
           
             $productlists->volumetric_weight = $volumetricwt[$i] ?? 0;
             $productlists->product_type = $request->product_details["product_type"][$i];
             $productlists->zone = $request->product_details["zone"][$i];
             $productlists->amount = $request->product_details["amount"][$i];
             $productlists->fuel_charge_percent = $request->product_details["fuel_charge_percent"][$i];
             $productlists->fuel_charge = $request->product_details["fuel_charge"][$i];
             $productlists->tgsc = $request->product_details["tgsc"][$i];
           //  dd($request->product_details["class_id"][$i]);
             // $productlists->star = $request->product_details["star"][$i];

             // custom charges
            $custom_charge_field = config('madni.custom_charge_field');
            foreach($custom_charge_field as $field) {
                $productlists->$field = $request->product_details["charge"][$field][$i] ?? 0;
            }
            $productlists->package = $request->product_details["package"][$i];
            $productlists->package_weight = $package_weight[$i];
             
            $saved = $productlists->save();
            }
             
            if($saved)
            {
             return back()->with('success','Invoice Created Successfully.');   
            }
            else{
                $invoice = CustomerInvoice::find($invoice->id);
                $invoice->delete();
                return back()->with('errors','Unable To Save Invoice At That Movement');
 
              }
         }
         else{
             return back()->with('errors','Unable To Create Invoice At That Movement');
         }
         
        

    }
    public function getCountryZone(Request $request) {
        $zone_type = $request->zone_type;
        $country = $request->destination;
        if(zone_type == 'import') {
            $country_zone = config('countryzone.import_zone');
        } else {
            $country_zone = config('countryzone.export_zone');
        }
        $zone = (array_key_exists($country,$country_zone)) ? $country_zone[$country] : null;
        return $zone;
    }

    public function docketCreate(Request $request,$invoice_id) {
        $invoice = CustomerInvoice::with('docket')->find($invoice_id);
        if($invoice) {
            if(!empty($invoice->docket)) {
                return redirect()->route('invoice.docket.view',$invoice->docket['id'])->with('error','Docket already generated');
            }
            return view('pages.invoice.docket-create',compact('invoice_id'));
        } else {
            abort(404);
        }
    }
    
    public function docketSave(Request $request) {
        $request->validate([
            'invoice_id' => 'required',
            'customer_ref_no' => 'nullable',
            'to_collection_address' => 'required',
            'delivery_address' => 'required',
            'receiver_vat' => 'required|numeric',
            'currency' => 'required',
            'net_amount' => 'required|numeric',
        ]);

        $docket = Docket::create([
            'invoice_id' => $request->invoice_id,
            'customer_ref_no' => $request->customer_ref_no,
            'to_collection_address' => $request->to_collection_address,
            'delivery_address' => $request->delivery_address,
            'dangours_good' => $request->dangours_good ?? 0,
            'delivery_instruction' => $request->delivery_instruction,
            'pirority' => $request->pirority ?? 0,
            'inhanced_liability' => $request->inhanced_liability ?? 0,
            'liability_value' => $request->liability_value,
            'liability_currency' => $request->liability_currency,
            'receiver_vat' => $request->receiver_vat,
            'currency' => $request->currency,
            'net_amount' => $request->net_amount,
        ]);
        if($docket){
            return redirect()->route('invoice.docket.view',$docket['id'])->with('success','Docket generated successully');
        } else {
            return back()->with('error','Some error ocucer in generate docket');
        }
    }

    public function docketView(Request $request,$id) {
        $docket = Docket::where('id',$id)->firstOrFail();
        if($docket) {
            $invoice = CustomerInvoice::with('customer','invoice_products')->where('id',$docket->invoice_id)->firstOrFail();
            
            $service_class = [];
            foreach($invoice->invoice_products as $product) {
                if(!array_key_exists($product->class_id,$service_class)) {
                    $service_class[$product->class_id] = [];
                }
                if(!in_array($product->product_type,$service_class[$product->class_id])) {
                    $service_class[$product->class_id][] = $product->product_type;
                }
            }
            return view('pages.invoice.docket-view',compact('docket','invoice','service_class'));

        } else {
            abort(404);
        }
    }
}
