<?php

/*

Author: Shantanu Kulkarni
Date: 18/10/2020
Github: @heyshantu13

*/

namespace App\Http\Controllers;

use App\TntPrice;
use App\User;
use Illuminate\Http\Request;
use DB;


class ApiMadniController extends Controller
{
    //

    public function calculateAmount(Request $request){

     
            // $request->validate([
            //     'provider_id'=> 'required',
            //     'is_import' => 'required',
            //     'class_id'=>'required',
            //     'is_doc' => 'required',
            //     'chargable_weight' => 'required',
            //     'zone' => 'required'
            // ]);

            $chargablewt = (float)$this->roundWeight($request->chargable_weight);
            if($request->provider_id == 1)
            {
                 /*

                   `. Query  SELECT * FROM `tnt_prices` WHERE `is_doc` = 0 AND `is_import` = 1  
                    AND `is_express` = 1 AND `price_categories_id` = 4 AND zone = "Zone 7"

                    2. Query: 
                    SELECT * FROM `tnt_prices` WHERE `is_doc` =1 AND`is_express` = 1 AND `is_import` = 1 AND`price_categories_id` = 3 AND `weight` = 2.0 AND `zone` = "Zone 7" ORDER BY `weight` DESC LIMIT 1

                    */


                    

                      // dd($request->price_categories_id);



               
                $amount = TntPrice::where('zone',$request->zone)
                ->where('is_import',$request->is_import)
                ->where('is_express',$request->class_id)
                ->where('is_doc',$request->is_doc)
                ->where('price_categories_id',$request->price_categories_id)
                ->where('weight',$chargablewt)
                ->orderBy('weight','DESC')
                ->limit(1)
                ->get();
               // dd($amount->count() > 0);
                if($amount->count() > 0)
                {
                  

                    return response()->json($amount,200);
                }

                else{    
                    
                 /*
                SELECT * FROM `tnt_prices` WHERE `is_doc` = 0 AND`is_express` = 1 AND `is_import` = 0 AND`price_categories_id` = 3
                ORDER BY abs(weight - 501) LIMIT 1
                 */
                $amount = DB::select( DB::raw("SELECT * FROM `tnt_prices` WHERE `is_doc` = :is_doc AND `is_express`=:is_express AND `is_import` = :is_import AND `price_categories_id` = :price_categories_id AND `zone` = :zonevar ORDER BY abs(weight - :weightval) LIMIT 1"), array(
                    'is_doc' => $request->is_doc,
                    'is_express' => $request->class_id,
                    'is_import' => $request->is_import,
                    'price_categories_id' => $request->price_categories_id,
                    'weightval' => $chargablewt,
                    'zonevar' => $request->zone
                  ));
               

                //   FOR TNT 0 

                // TNT WEIGHT SLAB

                //  TNT ECONOMY NDOX EXPORT
                if( $request->class_id == 0 && $request->is_import == 0){

                    if($chargablewt > 10 && $chargablewt <= 20){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 20 && $chargablewt <= 50){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 50 && $chargablewt <= 100){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 100 && $chargablewt <= 300){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 300 && $chargablewt <= 500){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }

                }

                  //  TNT EXPRESS NDOX EXPORT TAX SLAb
                  if( $request->class_id == 1 && $request->is_import == 0){

                    if($chargablewt > 20 && $chargablewt <= 30){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 30 && $chargablewt <= 50){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 50 && $chargablewt <= 75){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 75 && $chargablewt <= 100){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 100 && $chargablewt <= 300){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }
                    if($chargablewt > 300 && $chargablewt <= 500){
                        $amount['0']->price = $chargablewt * $amount['0']->price;
                    }

                }

                  // END TNT ECONOMY NDOX EXPORT



               

                // END TNT TAX SLAB

               

                // END FOR TNT
               
             
                return response()->json($amount,200);
                }
                
            }


        

    }

    public function calculateFedexPrice(Request $request){

          $chargablewt = (float)$this->roundWeight($request->chargable_weight);

                $amount = \App\FedexPrice::where('zone',$request->zone)
                ->where('is_import',$request->is_import)
                ->where('is_express',$request->class_id)
                ->where('is_doc',$request->is_doc)
                ->where('price_categories_id',$request->price_categories_id)
                ->where('weight',$chargablewt)
                ->orderBy('weight','DESC')
                ->limit(1)
                ->get();
               // dd($amount->count() > 0);
                if($amount->count() > 0)
                {
                    return response()->json($amount,200);
                }

                else{    
                    
                 /*
                SELECT * FROM `tnt_prices` WHERE `is_doc` = 0 AND`is_express` = 1 AND `is_import` = 0 AND`price_categories_id` = 3
                ORDER BY abs(weight - 501) LIMIT 1
                 */
                $amount = DB::select( DB::raw("SELECT * FROM `fedex_prices` WHERE `is_doc` = :is_doc AND `is_express`=:is_express AND `is_import` = :is_import AND `price_categories_id` = :price_categories_id AND `zone` = :zonevar ORDER BY abs(weight - :weightval) LIMIT 1"), array(
                    'is_doc' => $request->is_doc,
                    'is_express' => $request->class_id,
                    'is_import' => $request->is_import,
                    'price_categories_id' => $request->price_categories_id,
                    'weightval' => $chargablewt,
                    'zonevar' => $request->zone
                  ));
                return response()->json($amount,200);
                }

    }


    

    public function generateInvoice(Request $request){
        return dd($request);
    }

    private function roundWeight($price)
        {

            /*

            This COnver Values according to sheet values
            Example If Value is 1 it return 1
            If value is 1.2 it return 1.5
            If value is 1.5 it return 1.5
            If Value is 1.51 it return 2.0

            */
            $intVal = intval($price);
            $difference = $price-$intVal;
           // dd($difference);

   
                if($difference < 0.50 && $difference != 0){
                
                    $requiredval = 0.50 - $difference;
                    $price = $price + $requiredval;
                   $finalvalue = number_format($price,2);
                    // dd($finalvalue);
                    return $finalvalue;
                    
                }

                if($difference >= 0.51  && $difference != 0)
                {
                    $finalvalue = ceil($price);
                   return $finalvalue;
                }
                if($difference == 0 || $difference = 0.00)
                {
                    $finalvalue = $price;
                   return $finalvalue;
                }
   
                
   
   
        }

}
