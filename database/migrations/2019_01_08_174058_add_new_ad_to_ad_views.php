<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewAdToAdViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ad_views', function ( $table) {
            $table->string('ad_title5');
            $table->string('ad_image5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ad_views', function ( $table) {
            $table->dropColumn('ad_title5');
            $table->dropColumn('ad_image5');
        });
    }
}
