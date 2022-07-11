<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\keranjang;
use DB;
use Carbon\Carbon;

class PenjualanController extends Controller
{
    //
    public function index()
    {
        //
        $data = DB::table('keranjang')
                    ->join('kelola_order', 'kelola_order.id', '=', 'keranjang.kd_order')
                    ->join('bayar', 'bayar.id', '=', 'keranjang.kd_order')
                    ->select(   'keranjang.*', 
                                'kelola_order.username',
                                'kelola_order.alamat_lengkap',
                                'bayar.tgl_transaksi')
                    ->get();
        //dd($data);
        return view('admin.laporan_penjualan.index')
            ->with('i')->with('data', $data);
    }
}
