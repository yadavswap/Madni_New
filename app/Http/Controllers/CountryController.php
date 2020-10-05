<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khsing\World\World;

class CountryController extends Controller
{
    //

    public function getCountry(){ 

        // Get all countries

        $countries = World::Countries();
        return $countries;
    }
}
