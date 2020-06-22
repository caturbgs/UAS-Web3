<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMapelJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_jadwal', function (Blueprint $table) {
            $table->string('kd_mapel')->index();
            $table->string('kd_jadwal')->index();
            $table->timestamps();

            $table->primary(['kd_mapel', 'kd_jadwal']);

            $table->foreign('kd_mapel')
                  ->references('kd_mapel')
                  ->on('mapel')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('kd_jadwal')
                  ->references('kd_jadwal')
                  ->on('jadwal')
                  ->onDelete('cascade')
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
        Schema::dropIfExists('mapel_jadwal');
    }
}
