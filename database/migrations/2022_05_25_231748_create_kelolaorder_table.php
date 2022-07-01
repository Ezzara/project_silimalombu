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
            $table->string('id');
            $table->string('user_id')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('kd_provinsi')->nullable();
            $table->string('kd_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('kd_promo')->nullable();
            $table->string('catatan')->nullable();
            $table->string('status')->nullabel();
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
