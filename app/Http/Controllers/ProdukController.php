<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //

        $produk = Produk::latest()->paginate();
        $data = DB::table('produk')
                    ->join('kategori', 'kategori.id', '=', 'produk.kd_kategori')
                    ->get();

        return view('admin.kelola_produk.index', compact('produk'))
        ->with('i')->with('data', $data);
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
            'jmlh_stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            'kd_kategori' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        Produk::create($input);
        //dd(Produk::get('jmlah_stok'));
        //dd($input);
        
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
        return view ('pembeli.produk.show', compact('produk'));
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

        
        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $input = $request->all();

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
