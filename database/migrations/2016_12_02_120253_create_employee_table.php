<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phone_number')->length('10')->unsigned();
            $table->string('email')->unique();
            $table->string('role');
            $table->integer('role_id')->length(10)->unsidned();
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
        Schema::dropIfExists('employee');
    }
}
