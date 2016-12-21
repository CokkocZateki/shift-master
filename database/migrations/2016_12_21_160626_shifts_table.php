<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            
            $table->increments('id');
            $table->time('start_time');
            $table->time('end_time');
            $table->time('hours');
            $table->time('break_start_time')->nullable();
            $table->time('break_end_time')->nullable();
            $table->time('break')->nullable();
            $table->integer('schedule_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->timestamps();

            $table->foreign('schedule_id')
                  ->references('id')
                  ->on('schedules')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('employee_id')
                  ->references('id')
                  ->on('employee')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

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
    }
}


