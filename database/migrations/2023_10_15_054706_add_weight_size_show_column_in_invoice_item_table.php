<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeightSizeShowColumnInInvoiceItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            $table->boolean('weight_size_show')->after('chargable_weight')->default(0);
        });

        Schema::table('customer_invoices', function (Blueprint $table) {
            $table->string('branch')->after('price_categories_id')->nullable();
            $table->boolean('tgsc_show')->after('tgsc')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_products', function (Blueprint $table) {
        });

        Schema::table('customer_invoices', function (Blueprint $table) {
           
        });
    }
}
