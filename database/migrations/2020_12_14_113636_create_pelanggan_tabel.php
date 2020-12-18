<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpelanggan', function (Blueprint $table) {
            $table->id('KodePelanggan');
            $table->integer('NoPelanggan');
            $table->integer('NoMeter');
            $table->integer('KodeTarif');
            $table->string('NamaLengkap');
            $table->string('Telp');
            $table->string('Alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan_tabel');
    }
}
