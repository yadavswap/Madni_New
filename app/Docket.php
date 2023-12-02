<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docket extends Model
{
    //
    protected $guarded = ['id'];

    protected $casts = [
        'to_collection_address' => 'array',
        'delivery_address' => 'array'
    ];

    public function invoice() {
        return $this->belongsTo('App\CustomerInvoice', 'invoice_id','id');
    }
}
