<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminProfileController extends Controller
{
    //
    public function index() {
        return view ('admin.profil.index');
    }
}