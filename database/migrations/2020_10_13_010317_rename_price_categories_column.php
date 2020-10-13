<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePriceCategoriesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('price_categories', function(Blueprint $table) {
            $table->renameColumn('file_path', 'tnt_file_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('price_categories', function(Blueprint $table) {
            $table->renameColumn('tnt_file_path', 'file_path');
        });
    }
}
