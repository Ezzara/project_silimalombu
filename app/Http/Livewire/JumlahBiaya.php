<?php

namespace App\Http\Livewire;

use App\Models\Biaya;
use Livewire\Component;
use Session;

class JumlahBiaya extends Component
{
    public $ongkir = 1;
    
    public function render()
    {
        $biaya = Biaya::latest()->paginate();

        $biayaProvinsi = Biaya::where ('id', '=', $this->ongkir)->first();
       // $total = $biayaProvinsi->biaya_kirim;
        $carts = Session::get('cart');
        $total = 0;
        $berat_total = 0;
        foreach ($carts as $cart) {
            $total += $cart['price']*$cart['quantity'];
            $berat_total += $cart['weight']*$cart['quantity'];
        }
        $berat_total = (ceil($berat_total / 1000));
        //dd($berat_total);
        $total += $biayaProvinsi->biaya_kirim * $berat_total;
        //dd($total);
        
        return view('livewire.jumlah-biaya', ['total' => $total,'biaya_kirim'=>$biayaProvinsi->biaya_kirim * $berat_total], compact('biaya'));
    }
}
