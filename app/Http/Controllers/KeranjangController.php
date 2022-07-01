<?php

namespace App\Http\Controllers;
//Model
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
//Controller
use App\Http\Controllers\OrderController;
use Session;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::latest()->paginate();
        return view('pembeli.produk.index', compact('produk'))
        ->with ('i');
    }

    public function cart_remove(Request $request) 
    {   
        $request->session()->forget('cart');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Session::get('cart');
        foreach ($cart as $cart) 
        {
            /*
            $request->validate([
                'kd_order' => 'required',
                'nm_produk' => 'required',
                'gambar' => 'required',
                'jumlah' => 'required',
                'harga_satuan' => 'required',
                'harga_total' => 'required'
            ]);
            Keranjang::create($request->all());
            */
        }

        return redirect()->route('order.create')->with(['key' => $request['kd_order']]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keranjang $keranjang)
    {
        //
    }
}
