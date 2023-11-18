<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddImportExportZoneInWorldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('world_countries', function (Blueprint $table) {
            $table->string('import_zone')->after('name')->default(null);
            $table->string('export_zone')->after('import_zone')->default(null);
        });

        $import_zone = config('countryzone.import_zone');
        foreach($import_zone as $cou=>$zone) {
            DB::table('world_countries')->where('name',$cou)->update(['import_zone'=>$zone]);   
        }
        $export_zone = config('countryzone.export_zone');
        foreach($export_zone as $cou=>$zone) {
            DB::table('world_countries')->where('name',$cou)->update(['export_zone'=>$zone]);   
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worlds', function (Blueprint $table) {
            //
        });
    }
}
