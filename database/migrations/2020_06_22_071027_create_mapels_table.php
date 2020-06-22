<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guru')->index()->primary('id_guru');
            $table->string('kd_mapel', 10)->unique();
            $table->string('nama_mapel', 30);
            $table->timestamps();

            $table->foreign('id_guru')
                  ->references('id')
                  ->on('guru')
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
        Schema::dropIfExists('mapels');
    }
}
