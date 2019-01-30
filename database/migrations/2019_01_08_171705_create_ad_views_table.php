<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_views', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad_title1');
            $table->string('ad_image1');
            $table->string('ad_title2');
            $table->string('ad_image2');
            $table->string('ad_title3');
            $table->string('ad_image3');
            $table->string('ad_title4');
            $table->string('ad_image4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_views');
    }
}
