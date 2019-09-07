<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bu_name', 100);
            $table->string('bu_price', 20);
            $table->string('bu_square', 10);
            $table->string('month', 3);
            $table->string('year', 5);
            $table->string('bu_small_dis', 160);
            $table->string('bu_meta', 200);
            $table->string('image', 300);
            $table->string('bu_place', 100);
            $table->string('bu_longtitude', 50);
            $table->string('bu_latitude', 50);
            $table->tinyInteger('bu_rent');
            $table->tinyInteger('bu_type');
            $table->tinyInteger('bu_status')->default(0);
            $table->longtext('bu_large_dis');
            $table->integer('rooms');
            $table->integer('user_id');
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
        Schema::dropIfExists('bus');
    }
}
