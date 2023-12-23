<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    
    protected $fillable = ['fullname','mobile','email','mobile','gstin','account_no','country_id','state','pincode','address','price_categories_id'];
   
    public function category()

    {

        return $this->belongsTo('App\PriceCategory', 'price_categories_id','id');

    }
}
