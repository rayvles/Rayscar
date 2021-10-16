<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredit', function (Blueprint $table) {
            $table->string('kode_paket', 24);
            $table->decimal('harga_paket');
            $table->decimal('uang_muka');
            $table->integer('jml_cicilan');
            $table->decimal('bunga');
            $table->decimal('nilai_cicilan');
            $table->timestamps();

            $table->primary('kode_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kredit');
    }
}
