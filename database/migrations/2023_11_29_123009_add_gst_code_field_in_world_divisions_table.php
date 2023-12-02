<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddGstCodeFieldInWorldDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add gst_code field in world_divisions
        Schema::table('world_divisions', function (Blueprint $table) {
            $table->integer('gst_code')->after('has_city')->nullable();
        });

        // add company and customer state field in customer_invoices
        Schema::table('customer_invoices', function (Blueprint $table) {
            $table->bigInteger('company_state')->after('branch')->nullable();
            $table->bigInteger('customer_state')->after('company_state')->nullable();
        });

        // insert india state with their gst_code
        $indiaGstCodes = config('madni.india_state_gst_code');
        if($indiaGstCodes) {
            foreach($indiaGstCodes as $st=>$code) {
                DB::table('world_divisions')->insert([
                    'country_id'=>85,
                    'name'=>$st,
                    'gst_code'=>$code
                ]);        
            }
        }   

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('world_divisions', function (Blueprint $table) {
            $table->dropColumn('gst_code');
        });
        Schema::table('customer_invoices', function (Blueprint $table) {
            $table->dropColumn('company_state');
            $table->dropColumn('customer_state');
        });
    }
}
