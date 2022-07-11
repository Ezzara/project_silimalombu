<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

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
                'berat'=> 100,
                'jmlh_stok'=> 100,
                'harga'=> 100,
            ]);
        }
        DB::table('kategori')->insert(
            [
                [
                    'id' => '1',
                    'nm_kategori' => 'Oils',
                    'image' => 'oils.jpeg'
                ],
                [
                    'id' => '2',
                    'nm_kategori' => 'Buah',
                    'image' => 'buah.jpeg'

                ],
                [
                    'id' => '3',
                    'nm_kategori' => 'sayur',
                    'image' => 'sayur.jpeg'
                ],
                [
                    'id' => '4',
                    'nm_kategori' => 'makanan',
                    'image' => 'makanan.jpeg'
                ],
                [
                    'id' => '5',
                    'nm_kategori' => 'lainya',
                    'image' => 'lainya.jpeg'
                ],
            ]
        );

        DB::table('bayar')->insert(
            [
                'id'=>'100',
                'nama'=>'sam',
                'nominal'=>'34000',
                'tgl_transaksi'=> Carbon::parse('2000-01-01'),
                'bukti'=>'bukti.jpg',
                'telepon'=>'0211234323'
            ]
        );

        DB::table('keranjang')->insert (
            [
                'kd_order' => '344n3242',
                'nm_produk'=>'minyak',
                'gambar'=>'oils.jpeg',
                'jumlah'=>3,
                'harga_satuan'=>10000,
                'harga_total'=>30000,
                'berat_total' =>600,
            ]
        );

        DB::table('kelola_order')->insert (
            [
                'id' => uniqid(),
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
                
                'status'=>'Belum di Verifikasi',
                
            ]
        );

        DB::table('biaya')->insert (
            [
                [
                    'id' => '1',
                    'nm_provinsi'=>'Sumatra',
                    'biaya_kirim'=>10000,
                ],
                [
                    'id' => '2',
                    'nm_provinsi'=>'Jakarta',
                    'biaya_kirim'=>24000,
                ],
                [
                    'id' => '3',
                    'nm_provinsi'=>'Kalimantan',
                    'biaya_kirim'=>18000,
                ],
                [
                    'id' => '4',
                    'nm_provinsi'=>'Sulawesi',
                    'biaya_kirim'=>35000,
                ]
            ]
        );

        DB::table('users')->insert (
            [
                [
                    'name' => 'Admin',
                    'uname' => 'admin',
                    'email' => 'admin@online',
                    'is_admin' => '1',
                    'password' => bcrypt('123456'),
                    'telepon' => '0211234567',
                    'alamat_lengkap' => 'Jalan nomor 39',
                    'foto_profil'=>'default_user.jpeg',
                    'jenis_kelamin' => 'laki-laki',
                    'tgl_lahir' => Carbon::parse('2000-01-01'),
                    
                ],
                [
                    'name' => 'user',
                    'uname' => 'User',
                    'email' => 'user@online',
                    'is_admin' => '0',
                    'password' => bcrypt('123456'),
                    'telepon' => '0211234567',
                    'alamat_lengkap' => 'Jalan nomor 39',
                    'foto_profil'=>'default_user.jpeg',
                    'jenis_kelamin' => 'laki-laki',
                    'tgl_lahir' => Carbon::parse('2000-01-01'),
                ]
            ]
        );
    }
}
