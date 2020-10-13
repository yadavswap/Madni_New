<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tnt_prices', function (Blueprint $table) {
            $table->id();
            $table->string('zone',100);
            $table->float('price', 8,2);
            $table->string('weight',10);
            $table->char('is_doc',1);
            $table->char('is_express',1);
            $table->char('is_import',1);
            $table->bigInteger('price_categories_id')->references('id')->on('price_categories');
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
        Schema::dropIfExists('prices');
    }
}
