<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliCashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cash', function (Blueprint $table) {
            $table->string('kode_cash', 24);
            $table->string('ktp_pembeli', 24);
            $table->string('kode_mobil');
            $table->date('cash_tgl');
            $table->decimal('cash_bayar');
            $table->timestamps();

            $table->primary('kode_cash');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli');
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beli_cash');
    }
}
