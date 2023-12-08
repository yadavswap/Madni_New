<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    //
    protected $guarded = ['id'];   

    public function product_invoice()
    {
        return $this->hasMany('App\CustomerInvoice', 'customer_invoice_id','id');
    }
}
