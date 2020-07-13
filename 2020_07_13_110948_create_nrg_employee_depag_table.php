<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNrgEmployeeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nrg_employee_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->unsigned();
            $table->string('status_nrg');
            $table->string('ajuan_nrg');
            $table->date('terbit_nrg');
            $table->timestamps();
        });

        Schema::table('nrg_employee_depag',function (Blueprint $table){
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
        Schema::dropIfExists('nrg_employee_depag');
    }
}
