<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip', 10)->unique();
            $table->string('nama_guru', 30);
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->text('alamat');
            $table->string('no_telp')->unique();
            $table->string('foto')->nullable();
            $table->string('email', 30);
            $table->string('jabatan', 30);
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
        Schema::dropIfExists('gurus');
    }
}
