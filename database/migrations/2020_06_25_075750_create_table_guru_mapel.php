<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGuruMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_mapel', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guru')->index();
            $table->unsignedBigInteger('id_mapel')->index();
            $table->timestamps();

            $table->primary(['id_guru', 'id_mapel']);
            $table->foreign('id_guru')
                  ->references('id')
                  ->on('guru')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_mapel')
                  ->references('id')
                  ->on('mapel')
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
        Schema::dropIfExists('guru_mapel');
    }
}
