<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarCicilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilan', function (Blueprint $table) {
            $table->string('kode_cicilan', 24);
            $table->string('kode_kredit');
            $table->date('tgl_cicilan');
            $table->decimal('jml_cicilan');
            $table->integer('cicilan_ke');
            $table->decimal('cicilan_sisa_ke');
            $table->decimal('cicilan_sisa_harga');
            $table->timestamps();

            $table->primary('kode_cicilan');
            $table->foreign('kode_kredit')->references('kode_kredit')->on('kredit')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_cicilan');
    }
}
