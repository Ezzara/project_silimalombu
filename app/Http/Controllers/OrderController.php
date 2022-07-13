<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Biaya;
use App\Models\Kategori;
use App\Models\Produk;
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

    public function store(Request $request)
    {
        //
        //dd($request);
        $carts = Session::get('cart');
        foreach ($carts as $cart){
            $kd_kategori = Produk::where ('id', '=', $cart['id_produk'])->first();
            $nm_kategori = Kategori::where ('id', '=', $kd_kategori->kd_kategori)->first();
            $nm_provinsi = Biaya::where ('id', '=', $request->kd_provinsi)->first();
            //dd($nm_kategori);
            if( ($nm_kategori->nm_kategori == 'Buah' OR $nm_kategori->nm_kategori == 'Sayur')
                AND $nm_provinsi->nm_provinsi != 'Sumatra')
                return back()
                        ->with('message','Buah/Sayur tidak dapat dikirim ke luar provinsi Sumatra')
                        ->with('key',$request->id); 
        }
        $request->validate([
            'user_id' => 'required',
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
            'kd_provinsi'=>'required',   
        ]);
        $request['status'] = 'Sedang di Proses';
        $input = $request->all();
        Order::create($input);
        return redirect()->route('bayar.create')
                ->with(['key' => $request['id']])
                ->with('biaya_total', $request->biaya_total);
    }

    public function verif()
    {
        //dd($order->id);
        $order->status = "sudah diverifikasi";
        $order->save();
        return Redirect()->route('order.index');
    }

    public function show(Order $order)
    {
        //

        return view('admin.detail_pemesanan.show', compact('order'))
        ->with('i');
    }

    public function update(Request $request, Order $order)
    {
        $order->status = $request->verif;
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
