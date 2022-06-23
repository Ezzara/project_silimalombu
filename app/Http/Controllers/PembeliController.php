<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    //
    public function daftarProduk()
    {
        $produk = Produk::latest()->paginate();
        return view('pembeli.produk.index', compact('produk'))
        ->with ('i');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function cart()
    {
        $produk = Produk::latest()->paginate();
        return view('pembeli.keranjang.index', compact('produk'));
    }

    public function addToCart($id, Request $request)
    {
        $produk = Produk::findOrFail($id);
        $request->validate ([
            'jumlah' => 'required',
        ]);
        $cart = session()->get('cart', []);
        $key = uniqid();
            $cart[$id] = [
                "id" => $produk->id,
                "name" => $produk->nm_produk,
                "quantity" => $request->jumlah,
                "price" => $produk->harga,
                "image" => $produk->gambar,
                "key" => $key
            ];
        
          
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function notif()
    {
        return view('pembeli.notif');
    }

    public function about()
    {
        return view('pembeli.about');
    }
    public function qa()
    {
        return view('pembeli.qa');
    }

}