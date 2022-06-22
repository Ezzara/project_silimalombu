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
        //produk
        for ($i = 1 ; $i < 5 ; $i ++) {
            DB::table('produk')->insert ([
                'id' => (string) $i,
                'nm_produk' => 'Minyak',
                'kd_kategori' => (string) $i,
                'gambar' => '20220619135205.jpg',
                'keterangan'=> 'minyak',
                'jmlh_stok'=> 100,
                'harga'=> 100000,
            ]);
        }
        DB::table('kategori')->insert(
            [
                [
                    'id' => '1',
                    'nm_kategori' => 'Oils'
                ],
                [
                    'id' => '2',
                    'nm_kategori' => 'Buah'
                ],
                [
                    'id' => '3',
                    'nm_kategori' => 'sayur'
                ],
                [
                    'id' => '4',
                    'nm_kategori' => 'makanan'
                ],
                [
                    'id' => '5',
                    'nm_kategori' => 'lainya'
                ],
            ]
        );
    }
}
