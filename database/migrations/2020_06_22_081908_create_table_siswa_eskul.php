<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswaEskul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_eskul', function (Blueprint $table) {
            $table->unsignedBigInteger('id_siswa')->index();
            $table->unsignedBigInteger('id_eskul')->index();
            $table->timestamps();

            $table->primary(['id_siswa', 'id_eskul']);
            $table->foreign('id_siswa')
                  ->references('id')
                  ->on('siswa')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_eskul')
                  ->references('id')
                  ->on('eskul')
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
        Schema::dropIfExists('siswa_eskul');
    }
}
