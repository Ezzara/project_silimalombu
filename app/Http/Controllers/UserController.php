<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index ()
    {
        $user = User::latest()->paginate();
        return view ('admin.data_pelanggan.index', compact('user'))
            ->with('i');
    }
}
