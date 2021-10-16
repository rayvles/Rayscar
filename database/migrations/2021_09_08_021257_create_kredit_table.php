<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->string('kode_kredit', 24);
            $table->string('ktp_pembeli', 24);
            $table->string('kode_paket', 24);
            $table->string('kode_mobil', 24);
            $table->date('tgl_kredit');
            $table->string('fotokopi_kk');
            $table->string('fotokopi_slip_gaji');
            $table->timestamps();

            $table->primary('kode_kredit');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli');
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobil');
            $table->foreign('kode_paket')->references('kode_paket')->on('paket_kredit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kredit');
    }
}
