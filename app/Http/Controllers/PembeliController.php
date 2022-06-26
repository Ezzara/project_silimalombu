<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    //

    public function daftarProduk(Request $request)
    {
        //$produk = Produk::latest();
        $kategori = Kategori::latest()->paginate();
        //dd($kategori);
        //dd(is_null($request->filter));
        if(is_null($request->filter)) {
            $produk = Produk::where([
                ['nm_produk','like',"%".$request->keyword."%"],
                ])
                ->paginate();
            }
        else {
            $produk = Produk::where([
                ['nm_produk','like',"%".$request->keyword."%"],
                ['kd_kategori','=',$request->filter],
                ])
                ->paginate();
        }
        return view('pembeli.produk.index', compact('produk','kategori'))
        ->with ('i');
    }
    public function show($id)
    {
        //
        $produk = Produk::findOrFail($id);
        return view ('pembeli.produk.show', compact('produk'));
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

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function logout()
    {
        return view ('pembeli.logout');
    }

}
