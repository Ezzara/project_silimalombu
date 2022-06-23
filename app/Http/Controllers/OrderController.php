<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order = Order::latest()->paginate(5);

        return view('admin.detail_pemesanan.index', compact('order'))
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
        return view('pembeli.order.create');
    }
    public function buat($key)
    {
        //
        return view('pembeli.order.create');
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
        
        $request->validate([
            'username'=> 'required',
            'email'=> 'required',
      
            'nama_penerima'=> 'required',

            'alamat_lengkap'=> 'required',
            'kelurahan'=> 'required',
            'kecamatan'=> 'required',
            'kab_kota'=> 'required',
            
            //'kd_provinsi'=> 'required',
            'kd_pos'=> 'required',
            'telepon'=> 'required',
            //'kd_promo'=> 'required',
            //'catatan'=> 'required',
            
        ]);
        
        $request['id'] = uniqid();
        $request['status'] = 'belum';
        $input = $request->all();
        Order::create($input);

        return redirect()->route('pembeli.produk')
            ->with('success', 'Produk berhasil di Edit');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        $request->validate([
            'username'=> 'required',
            'email'=> 'required',
            'nama_penerima'=> 'required',
            'alamat_lengkap'=> 'required',
            'kelurahan'=> 'required',
            'kecamatan'=> 'required',
            'kab_kota'=> 'required',
            //'kd_provinsi'=> 'required',
            'kd_pos'=> 'required',
            'telepon'=> 'required',
            'kd_promo'=> 'required',
            'catatan'=> 'required',
        ]);
        $request['id'] = $key;
        $request['status'] = 'belum';
        Order::create($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
