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
            $table->double('gross_amount', 19,4);
            $table->double('fuel_surcharge', 19,4);
            $table->double('enhance_security_charge', 19,4);
            $table->double('custom_clearance', 19,4);
            $table->double('oda_charge', 19,4);
            $table->double('adc_noc_charge', 19,4);
            $table->double('do_charge', 19,4);
            $table->double('non_conveyar_charge', 19,4);
            $table->double('address_correction_charge', 19,4);
            $table->double('war_surcharge', 19,4);
            $table->double('warehousing_charge', 19,4);
            $table->double('ad_code_registration_charge', 19,4);
            $table->double('air_cargo_registration_charge', 19,4);
            $table->double('gst_percentage', 2)->nullable();
            $table->double('cgst_amount', 19,4)->nullable();
            $table->double('sgst_amount', 19,4)->nullable();
            $table->double('igst_amount', 19,4)->nullable();
            $table->double('is_doc', 1)->nullable();
            $table->double('is_express', 1)->nullable();
            $table->double('is_import',1)->nullable();
            $table->double('provider',20)->nullable();
            $table->double('type',20)->nullable();
            $table->double('freight_amount', 19,4)->nullable();
            $table->double('duty_payment', 19,4)->nullable();
            $table->double('net_amount', 19,4);
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
