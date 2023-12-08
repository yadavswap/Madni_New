<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInvoice extends Model
{
    //
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id','id');
    }

    public function invoice_products()
    {
        return $this->hasMany('App\InvoiceProduct', 'customer_invoice_id','id');
    }
}
