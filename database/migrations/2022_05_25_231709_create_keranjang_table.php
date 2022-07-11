<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->string('kd_order')->nullable();
            $table->string('nm_produk')->nullable();
            $table->string('gambar')->nullable();
            $table->decimal('jumlah')->nullable()->default(0.00);
            $table->decimal('harga_satuan')->nullable()->default(0.00);
            $table->decimal('harga_total')->nullable()->default(0.00);
            $table->decimal('berat_total')->nullable()->default(0.00);
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
        Schema::dropIfExists('keranjang');
    }
}
