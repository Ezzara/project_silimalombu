<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->string('id');
            $table->string('nm_produk')->nullable();
            $table->string('kd_kategori')->nullable();
            $table->string('gambar')->nullable();
            $table->string('keterangan')->nullable();
            $table->decimal('jmlh_stok')->nullable()->default(0.00);
            $table->decimal('harga')->nullable()->default(0.00);
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
        Schema::dropIfExists('produk');
    }
}
