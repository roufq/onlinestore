<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('keranjang_id');
            $table->string('user_id');
            $table->string('fullname');
            $table->time('waktu_bayar');
            $table->string('nama_barang');
            $table->string('harga');
            $table->string('no_hp');
            $table->string('total');
            $table->string('metode');
            $table->string('ongkir');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('alamat_rumah');
            $table->string('status');
            $table->string('jumlah');
            $table->string('jumlah_harga');
            $table->string('bukti_pembayaran');
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
        Schema::dropIfExists('checkouts');
    }
}
