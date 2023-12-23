<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dockets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_id');
            $table->string('customer_ref_no')->nullable();
            $table->string('to_collection_address')->nullable();
            $table->string('delivery_address')->nullable();
            $table->boolean('dangours_good')->deafult(0);
            $table->longText('delivery_instruction')->nullable();
            $table->boolean('pirority')->deafult(0);
            $table->boolean('inhanced_liability')->deafult(0);
            $table->string('liability_currency')->deafult(null);
            $table->double('liability_value')->deafult(null);
            $table->double('receiver_vat')->nullable();
            $table->string('currency')->nullable();
            $table->double('net_amount')->nullable();
            $table->timestamps();
        });

        Schema::table('customers', function (Blueprint $table) {
            $table->string('account_no')->after('gstin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dockets');
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('account_no');
        });
    }
}
