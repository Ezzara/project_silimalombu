<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\keranjang;
use DB;

class PenjualanController extends Controller
{
    //
    public function index()
    {
        //

        $keranjang = Keranjang::latest()->paginate();
        $data = DB::table('keranjang')
                    ->join('kelola_order', 'kelola_order.id', '=', 'keranjang.kd_order')
                    ->join('bayar', 'bayar.id', '=', 'keranjang.kd_order')
                    ->get();
       // dd($data);
        return view('admin.laporan_penjualan.index', compact('keranjang'))
        ->with('i')->with('data', $data);
    }
}
