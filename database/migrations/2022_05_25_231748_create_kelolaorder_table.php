<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelola_order', function (Blueprint $table) {
            $table->id('id_order');
            $table->string('username');
            $table->string('email');
            $table->string('nama_penerima');
            $table->string('alamat_lengkap');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kab_kota');
            $table->string('kd_provinsi');
            $table->string('kd_pos');
            $table->string('telepon');
            $table->string('kd_promo');
            $table->string('catatan');
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
        Schema::dropIfExists('kelola_order');
    }
}
