<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class adminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index() 
    {
        return view ('admin.profil.index');
    }

    public function edit()
    {
        return view('admin.profil.edit');
    }

    public function update(Request $request) 
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

        $user = Auth::user();
        $user->name = $request['nama'];
        $user->email = $request['email'];
        $user->telepon = $request['telepon'];
        $user->save();
        //dd($request['nama']);
        return redirect()->route('admin.profile');
    }

    
    
    public function changePassword(Request $request)
    {       
        $user = Auth::user();
    
        $userPassword = $user->password;
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('admin.profile');
    }
}
