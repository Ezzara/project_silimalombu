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

        DB::table('users')->insert (
            [
                [
                    'name' => 'Admin',
                    'email' => 'admin@online',
                    'is_admin' => '1',
                    'password' => bcrypt('123456'),
                    'telepon' => '0211234567',
                    'alamat_lengkap' => 'Jalan nomor 39',
                    'foto_profil' => 'fotoprofile.jpg',
                    'jenis_kelamin' => 'laki-laki',
                    'tgl_lahir' => '10 - 03 - 2000'
                    
                ],
                [
                    'name' => 'user',
                    'email' => 'user@online',
                    'is_admin' => '0',
                    'password' => bcrypt('123456'),
                    'telepon' => '0211234567',
                    'alamat_lengkap' => 'Jalan nomor 39',
                    'foto_profil' => 'fotoprofile.jpg',
                    'jenis_kelamin' => 'laki-laki',
                    'tgl_lahir' => '10 - 03 - 2000'
                ]
            ]
        );
    }
}
