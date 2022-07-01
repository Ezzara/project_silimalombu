<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class NotificationController extends Controller
{
    //
    public function index() 
    {
        $order = DB::table('kelola_order')->where('user_id', Auth::id())->paginate();
        //dd($order);
        return view('pembeli.notif',compact('order'));
    }
}
