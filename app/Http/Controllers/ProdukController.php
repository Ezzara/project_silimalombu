<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
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

        return view('admin.kelola_produk.index', compact('produk'))
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kelola_produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'id' => 'required',
            'nm_produk' => 'required',
            'harga' => 'required',
            'jmlah_stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            //'kd_kategori' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        Produk::create($input);

        return redirect()->route('produk.index')
            ->with('success', 'Produk telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin.kelola_produk.edit', compact('produk'));
    }
    
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nm_produk' => 'required',
            'harga' => 'required',
            'jmlah_stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $produk->update($input);

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil di Edit');
    }
   
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'deleted successfully');

            
    }
}
