<?php

namespace App\Http\Controllers;
//Model
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use DB;
//Controller
use App\Http\Controllers\OrderController;
use Session;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $carts = Session::get('cart');
        //dd($carts);
        foreach ($carts as $cart) 
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
            $keranjang = new Keranjang;
            $keranjang -> kd_order = $request['kd_order'];
            $keranjang -> nm_produk = $cart['name'];
            $keranjang -> gambar = $cart['image'];
            $keranjang -> jumlah = $cart['quantity'];
            $keranjang -> harga_satuan = $cart['price'];
            $keranjang -> harga_total = $cart['quantity'] * $cart['price'];
            $keranjang -> save();
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
