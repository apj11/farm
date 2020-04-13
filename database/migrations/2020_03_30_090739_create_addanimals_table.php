<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddanimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addanimals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_id');
            $table->string('status');
            $table->string('gender');
            $table->string('breed');
            $table->string('color');
            $table->string('tagnumber');
            $table->string('tagcolor');
            $table->string('regnumber');
            $table->string('birthdate');
            $table->string('weight');
            $table->string('parenttag');
            $table->string('living');
            $table->string('purchasedate');
            $table->string('purchasefrom');


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
        Schema::dropIfExists('addanimals');
    }
}
