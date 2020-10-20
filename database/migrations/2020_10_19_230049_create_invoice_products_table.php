<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_invoice_id')->references('id')->on('customer_invoices');
            $table->char('consignment_no',100);
            $table->char('referance_no',100);
            $table->char('booking_date',100);
            $table->char('origin',100);
            $table->char('destination',100);
            $table->float('actual_weight', 8,2);
            $table->float('l', 8,2);
            $table->float('w', 8,2);
            $table->float('h', 8,2);
            $table->char('mode',2);
            $table->float('chargable_weight', 8,2);
            $table->float('volumetric_weight', 8,2);
            $table->char('product_type',1);
            $table->char('zone',10);
            $table->float('amount', 8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_products');
    }
}
