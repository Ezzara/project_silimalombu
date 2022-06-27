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
        //
        //$id = Produk::findOrFail();
        //$cart = new Keranjang;
       //$cart -> user_id = $request ->session ()->get('cart')[$id];
        //$cart -> save;

        //$cart = session()->get('cart', [])->key; //another way
        $cart = Session::get('cart');

        //dd($cart[1]['key']);
        //$cart = json_decode(session()->get('cart',[0]), true);
        //$cart -> save;

        $key = $cart[1]['key'];
        
        //$key = session()->get('cart',["key"]);
        //foreach ($request->produk as $k => $p) {
            $request->validate([
                'id' => 'required',
                'nm_produk' => 'required',
                //'gambar' => $cart['image'],
                'gambar' => 'required',
                'jumlah' => 'required',
                'harga_satuan' => 'required',
                'harga_total' => 'required'
            ]);
            $request['id'] = $key;
            //$request['id'] = $key;
        //}
       // Keranjang::create($request->all());
        return redirect()->route('order.create',$key);
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
