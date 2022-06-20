<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class allseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1 ; $i < 10 ; $i ++) {
            DB::table('produk')->insert ([
                'id' => (string) $i,
                'nm_produk' => Str::random(10),
                //'kd_katgori' => (string) $i,
                'gambar' => '20220619135205.jpg',
                'keterangan'=>Str::random(10),
                'jmlh_stok'=> 100,
                'harga'=> 10,
            ]);
        }
    }
}
