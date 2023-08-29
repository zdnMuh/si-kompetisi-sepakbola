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
        Schema::create('tb_klub', function (Blueprint $table) {
            $table->bigIncrements('id_klub');
            $table->string('nama_klub', 50);
            $table->string('asal_klub', 50);
            $table->string('julukan_klub', 50);
            $table->string('no_telp', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_klub');
    }
};