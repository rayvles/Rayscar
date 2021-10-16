<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->string('kode_mobil', 24);
            $table->string('merk', 50);
            $table->string('type', 50);
            $table->string('warna', 50);
            $table->decimal('harga');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->primary('kode_mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
