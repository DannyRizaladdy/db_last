<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileEmployeeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_employee_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->unsigned();
            $table->integer('kode_satker');
            $table->string('tugas');
            $table->date('tmt_guru');
            $table->date('tmt_pns');
            $table->enum('status_verval',['Hijau','Kuning'.'Belum Verval']);
            $table->string('periode_verval');
            $table->enum('status_inpassing',['Ya','Tidak']);
            $table->integer('masa_kerja');
            $table->integer('usia');
            $table->string('status_aktif');
            $table->enum('status_dispensasi',['Ya','Tidak']);
            $table->enum('status_skbk',['Ya','Tidak','Belum SKBK']);
            $table->enum('status_layak',['Ya','Tidak']);
            $table->string('status_skakpt');
            $table->integer('npwp');
            $table->integer('no_rekening');
            $table->timestamps();
        });

        Schema::table('profile_employee_depag',function (Blueprint $table){
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
        Schema::dropIfExists('profile_employee_depag');
    }
}
