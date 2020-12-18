<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtagihan', function (Blueprint $table) {
            $table->id('KodeTagihan');
            $table->string('NoTagihan');
            $table->integer('KodePelanggan');
            $table->string('TahunTagih');
            $table->string('BulanTagij');
            $table->string('JumlahPemakaian');
            $table->double('TotalBayar');
            $table->string('Status');
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
        Schema::dropIfExists('tagihan');
    }
}
