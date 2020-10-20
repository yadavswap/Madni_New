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
}
