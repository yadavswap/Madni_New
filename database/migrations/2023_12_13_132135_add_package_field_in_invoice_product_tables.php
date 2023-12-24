<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageFieldInInvoiceProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            //$table->integer('package')->after('destination')->nullable();
            //$table->text('package_weight')->after('package')->nullable();
            $table->string('l', 10)->nullable()->change();
            $table->string('w', 10)->nullable()->change();
            $table->string('h', 10)->nullable()->change();
            $table->string('volumetric_weight', 10)->nullable()->change();
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
            $table->dropColumn('package');
            $table->dropColumn('package_weight');
            $table->string('l')->nullable(false)->change();
            $table->string('w')->nullable(false)->change();
            $table->string('h')->nullable(false)->change();
            $table->string('volumetric_weight')->nullable(false)->change();
        });
    }
}
