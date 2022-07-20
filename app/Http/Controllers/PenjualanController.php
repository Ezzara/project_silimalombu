<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\keranjang;
use App\Models\Penjualan;
use App\Models\Bayar;
use DB;
use Carbon\Carbon;

class PenjualanController extends Controller
{
    //
    public function index()
    {
        /*
        $data = DB::table('keranjang')
                    ->join('kelola_order', 'kelola_order.id', '=', 'keranjang.kd_order')
                    ->join('bayar', 'bayar.id', '=', 'keranjang.kd_order')
                    ->select(   'keranjang.*', 
                                'kelola_order.username',
                                'kelola_order.alamat_lengkap',
                                'bayar.tgl_transaksi')
                    ->get();
        return view('admin.laporan_penjualan.index')
            ->with('i')->with('data', $data);
        */
        $data = Penjualan::latest()->paginate();

        return view('admin.laporan_penjualan.index', compact('data'));
    }
    public function store( $key )
    {
        //dd($key);
        $keranjang = Keranjang::where('kd_order',$key)
                        ->first();
        $order = Order::where('id',$key)
                        ->first();
        $bayar = Bayar::where('id',$key)
                        ->first();
        //dd($keranjang->kd_order);
        return Penjualan::create([
            'kd_order' => $keranjang->kd_order,
            'uname' => $order->username,
            'jumlah' => $keranjang->jumlah,
            'alamat' => $order->alamat_lengkap,
            'tgl_transaksi' => $bayar->tgl_transaksi,
            'total' => $keranjang->harga_total
        ]);
    }
}
