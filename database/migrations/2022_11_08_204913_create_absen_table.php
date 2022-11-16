<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_siswa')->unsigned();
            $table->enum('status', ['hadir', 'sakit', 'ijin', 'tanpa keterangan']);
            $table->timestamp('waktu')->useCurrent();
            $table->enum('sesi', ['1', '2', '3', '4'])->useCurrent()->nullable();
            $table->timestamp('updated_at')->nullable()->useCurrentUpdate();
            $table->foreign('id_siswa')->references('id')->on('siswa')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
    }
}
