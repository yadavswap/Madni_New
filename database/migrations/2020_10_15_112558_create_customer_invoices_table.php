<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->references('id')->on('customers');
            $table->bigInteger('price_categories_id')->references('id')->on('price_categories');
            $table->char('state_code',5);
            $table->char('invoice_date',10);
            $table->float('gross_amount', 8,4);
            $table->float('fuel_surcharge', 8,4);
            $table->float('enhance_security_charge', 8,4);
            $table->float('custom_clearance', 8,4);
            $table->float('oda_charge', 8,4);
            $table->float('adc_noc_charge', 8,4);
            $table->float('do_charge', 8,4);
            $table->float('non_conveyar_charge', 8,4);
            $table->float('address_correction_charge', 8,4);
            $table->float('war_surcharge', 8,4);
            $table->float('warehousing_charge', 8,4);
            $table->float('ad_code_registration_charge', 8,4);
            $table->float('air_cargo_registration_charge', 8,4);
            $table->char('gst_percentage', 2)->nullable();
            $table->float('cgst_amount', 8,4)->nullable();
            $table->float('sgst_amount', 8,4)->nullable();
            $table->float('igst_amount', 8,4)->nullable();
            $table->char('is_doc', 1)->nullable();
            $table->char('is_express', 1)->nullable();
            $table->char('is_import',1)->nullable();
            $table->char('provider',20)->nullable();
            $table->char('type',20)->nullable();
            $table->float('freight_amount', 8,4)->nullable();
            $table->float('duty_payment', 8,4)->nullable();
            $table->float('net_amount', 8,4);
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
        Schema::dropIfExists('customer_invoices');
    }
}
