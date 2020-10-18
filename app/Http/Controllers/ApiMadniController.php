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
                ->get();
                return response()->json($amount,200);
            }

            if($request->provider == 2)
            {

            }
            
        

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
