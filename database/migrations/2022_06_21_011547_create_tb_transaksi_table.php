<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->foreignId('id_panitia')->references('id_panitia')->on('tb_panitia');
            $table->foreignId('id_klub')->references('id_klub')->on('tb_klub');
            $table->foreignId('id_kompetisi')->references('id_kompetisi')->on('tb_klasmen');
            $table->string('j_pembayaran', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_transaksi');
    }
};