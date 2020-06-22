<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis', 10)->unique();
            $table->string('nama_siswa', 30);
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->text('alamat');
            $table->string('no_telp')->unique();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_kelas');
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
        Schema::dropIfExists('siswas');
    }
}
