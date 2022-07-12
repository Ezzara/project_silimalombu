<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Carbon\Carbon;

class PenjualanTable extends Component
{
    public $option = "";
    public $test = "hiii";

    public function render()
    {
        
        if($this->option == '')
        {
            $data = DB::table('keranjang')
            ->join('kelola_order', 'kelola_order.id', '=', 'keranjang.kd_order')
            ->join('bayar', 'bayar.id', '=', 'keranjang.kd_order')
            ->select(   'keranjang.*', 
                        'kelola_order.username',
                        'kelola_order.alamat_lengkap',
                        'bayar.tgl_transaksi')
            ->get();
            return view('livewire.penjualan-table',['total' => $this->option])
                ->with('i')->with('data', $data)->with('test',$this->test);
        }

        else 
        {
           // dd('hi');
            $data = DB::table('keranjang')
            ->join('kelola_order', 'kelola_order.id', '=', 'keranjang.kd_order')
            ->join('bayar', 'bayar.id', '=', 'keranjang.kd_order')
            ->select(   'keranjang.*', 
                        'kelola_order.username',
                        'kelola_order.alamat_lengkap',
                        'bayar.tgl_transaksi')
            ->whereMonth('bayar.tgl_transaksi', $this->option)
            ->get();

            return view('livewire.penjualan-table',['total' => $this->option])
                ->with('i')->with('data', $data);
        }
    }
}