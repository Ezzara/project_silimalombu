<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use Illuminate\Http\Request;
use Session;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembeli.bayar.create');
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
      
        $request->validate ([
            'id' => 'required',
            'nama' => 'required',
            'nominal' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'telepon' => 'required',
            'tgl_transaksi' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('bukti')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['bukti'] = "$profileImage";
        }
        //dd($request->id);
        Bayar::create($input);
        app('App\Http\Controllers\PenjualanController')->store($request->id);
        sleep(1);
        $request->session()->forget('cart');
        return redirect()->route('pembeli.notif');
        //return redirect()->route('admin.penjualan.store',$request->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function show(Bayar $bayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayar $bayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayar $bayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayar $bayar)
    {
        //
    }
}
