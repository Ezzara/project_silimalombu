<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Biaya;
use Session;
use DB;

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

    public function detail()
    {
        $order = Order::latest()->paginate();
        $data = DB::table('kelola_order')
            ->join('bayar', 'bayar.id', '=', 'kelola_order.id')
            ->get();
        return view('admin.detail_pemesanan.show',compact('order'))
            ->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $biaya = Biaya::latest()->paginate();
        return view('pembeli.order.create',compact('biaya'));
    }
    public function buat( )
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
        //dd($request);
        $request->validate([
            'username'=> 'required',
            'email'=> 'required',
            'id' => 'required',
            'nama_penerima'=> 'required',
            'alamat_lengkap'=> 'required',
            'kelurahan'=> 'required',
            'kecamatan'=> 'required',
            'kab_kota'=> 'required',
            'kd_pos'=> 'required',
            'telepon'=> 'required',
            'kd_promo'=> 'nullable',
            'catatan'=> 'nullable',           
        ]);
        $request['status'] = 'belum';
        $input = $request->all();
        Order::create($input);

        return redirect()->route('bayar.create')
                ->with(['key' => $request['id']]);
    }

    public function verif()
    {
        dd($order->id);
        $order->status = "sudah diverifikasi";
        $order->save();
        return Redirect()->route('order.index');
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

        return view('admin.detail_pemesanan.show', compact('order'))
        ->with('i');
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
        $order->status = "sudah diverifikasi";
        $order->save();
        return Redirect()->route('order.index');
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
        $order->delete();

        return redirect()->route('admin.detail');
    }
}
