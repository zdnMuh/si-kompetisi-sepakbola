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
        Schema::create('tb_pemain', function (Blueprint $table) {
            $table->bigIncrements('id_pemain');
            $table->foreignId('id_klub')->references('id_klub')->on('tb_klub');
            $table->string('nama_pemain', 50);
            $table->string('no_punggung', 50);
            $table->string('posisi', 50);
            $table->string('tgl_lahir', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pemain');
    }
};
