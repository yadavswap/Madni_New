<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomChargesFieldInInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            $table->double('custom_clearance')->after('star')->default(0.00);
            $table->double('oda_charge')->after('custom_clearance')->default(0.00);
			$table->double('adc_noc_charge')->after('oda_charge')->default(0.00);
            $table->double('do_charge')->after('adc_noc_charge')->default(0.00);
            $table->double('non_conveyar_charge')->after('do_charge')->default(0.00);
            $table->double('address_correction_charge')->after('non_conveyar_charge')->default(0.00);
            $table->double('war_surcharge')->after('address_correction_charge')->default(0.00);
            $table->double('warehousing_charge')->after('war_surcharge')->default(0.00);
            $table->double('ad_code_registration_charge')->after('warehousing_charge')->default(0.00);
            $table->double('air_cargo_registration_charge')->after('ad_code_registration_charge')->default(0.00);
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
            $table->dropColumn('custom_clearance');
            $table->dropColumn('oda_charge');
			$table->dropColumn('adc_noc_charge');
            $table->dropColumn('do_charge');
            $table->dropColumn('non_conveyar_charge');
            $table->dropColumn('address_correction_charge');
            $table->dropColumn('war_surcharge');
            $table->dropColumn('warehousing_charge');
            $table->dropColumn('ad_code_registration_charge');
            $table->dropColumn('air_cargo_registration_charge');
        });
    }
}
