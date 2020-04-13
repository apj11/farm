<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddemployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addemployees', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('fullname');
            $table->string('address');
            $table->string('gender');
            $table->string('cnumber');
            $table->string('fname');
            $table->string('mname');
            $table->string('citizen');
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
        Schema::dropIfExists('addemployees');
    }
}
