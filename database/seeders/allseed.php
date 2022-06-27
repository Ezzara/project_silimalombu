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
                'harga'=> 100,
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

        DB::table('bayar')->insert(
            [
                'id'=>'100',
                'nama'=>'sam',
                'nominal'=>'34000',
                'bukti'=>'bukti.jpg',
                'telepon'=>'0211234323'
            ]
        );

        DB::table('keranjang')->insert (
            [
                'id'=>'100',
                'nm_produk'=>'minyak',
                'gambar'=>'oils.jpeg',
                'jumlah'=>3,
                'harga_satuan'=>10000,
                'harga_total'=>30000,
            ]
        );

        DB::table('kelola_order')->insert (
            [
                'id'=>'100',
                'username'=>'nama',
                'email'=>'user@online',
                'nama_penerima'=>'dina',
                'alamat_lengkap'=>'jalan no 39',
                'kelurahan'=>'jatisari',
                'kecamatan'=>'jatiasih',
                'kab_kota'=>'bekasi',
                'kd_provinsi'=>'2',
                'kd_pos'=>'3333',
                'telepon'=>'0323232332',
                'kd_promo'=>'3333',
                'catatan'=>'tambahan',
                'status'=>'sudah diverifikasi',
            ]
        );

        DB::table('biaya')->insert (
            [
                [
                    'id' => '1',
                    'nm_provinsi'=>'jakarta',
                    'biaya_kirim'=>24000,
                ],
                [
                    'id' => '2',
                    'nm_provinsi'=>'jawa barat',
                    'biaya_kirim'=>24000,
                ]
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
