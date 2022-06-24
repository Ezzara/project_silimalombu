<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index () {
        return view ('pembeli.profile');
    }

    public function update (Request $request) {
        $this->validate($request, [
            'uname' => 'required',
            //'email' => 'required|email|max:255|unique:users',
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            //'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('foto_profil')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto_profil'] = "$profileImage";
        }
        $request['is_admin'] = '0';
        $user = Auth::user();
        $user->update($input);
        return back();
    }
}
