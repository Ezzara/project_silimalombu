<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view ('pembeli.produk.show', compact('produk'));
    }

    public function welcome()
    {
        $kategori = Kategori::latest()->paginate();
        return view('welcome', compact('kategori'));
    }

    public function cart()
    {
        $produk = Produk::latest()->paginate();
        return view('pembeli.keranjang.index', compact('produk'));
    }

    public function addToCart($id, Request $request)
    {
        $produk = Produk::findOrFail($id);
        if($request->jumlah > $produk->jmlh_stok) 

            return back()->with('message', 'Stok kurang');

        elseif($request->jumlah < 0)

            return back()->with('message','Input stok salah');
            
        $request->validate ([
            'jumlah' => 'required',
        ]);
        $cart = session()->get('cart', []);
        $key = uniqid();
            $cart[$id] = [
                //"id" => '1',
                "name" => $produk->nm_produk,
                "quantity" => $request->jumlah,
                "price" => $produk->harga,
                "image" => $produk->gambar,
                "key" => $key,
                "id_produk" => $produk->id,
                "weight" => $produk->berat,
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
