<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJtmEmployeeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jtm_employee_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->unsigned();
            $table->integer('jtm_linier');
            $table->integer('jtm_non_linier');
            $table->integer('jtm_tugas');
            $table->integer('total_jtm');
            $table->integer('total_jtm_satminkal');
            $table->integer('total_jtm_non_satminkal');
            $table->timestamps();
        });

        Schema::table('jtm_employee_depag',function (Blueprint $table){
           $table->foreign('pageid')->references('pageid')->on('employee_depag')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jtm_employee_depag');
    }
}
