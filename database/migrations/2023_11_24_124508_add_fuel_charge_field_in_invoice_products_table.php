<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFuelChargeFieldInInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            $table->double('other_charge')->after('air_cargo_registration_charge')->default(0.00);
            $table->double('fuel_charge_percent')->after('other_charge')->default(0.00);
            $table->double('fuel_charge')->after('fuel_charge_percent')->default(0.00);
            $table->double('tgsc')->after('fuel_charge')->default(0.00);
        });

        Schema::table('customer_invoices', function (Blueprint $table) {
            $table->double('other_charge')->after('air_cargo_registration_charge')->default(0.00);
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
            $table->addColumn('other_charge');
            $table->addColumn('fuel_charge_percent');
            $table->addColumn('fuel_charge');
            $table->addColumn('tgsc');
        });
        Schema::table('customer_invoices', function (Blueprint $table) {
            $table->dropColumn('other_charge');
        });
    }
}
