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
            $table->char('actual_weight',10);
            $table->char('l',10);
            $table->char('w',10);
            $table->char('h', 10);
            $table->char('mode',2);
            $table->char('chargable_weight', 10);
            $table->char('volumetric_weight', 10);
            $table->char('product_type',1);
            $table->char('zone',10);
            $table->double('amount', 16,2);
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
