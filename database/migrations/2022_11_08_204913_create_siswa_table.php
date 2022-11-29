<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nisn');
            $table->enum('kelas', ['X', 'XI', 'XII']);
            $table->enum('no_kelas', ['1', '2', '3', '4', '5']);
            $table->enum('sesi', ['1', '2', '3']);
            $table->bigInteger('id_jurusan')->unsigned();
            $table->bigInteger('id_ruangan')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentUpdate();

            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_ruangan')->references('id')->on('ruangan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
