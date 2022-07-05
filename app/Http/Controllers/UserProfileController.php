<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Image;

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
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($image = $request->file('foto_profil')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);

            $image->move($destinationPath, $profileImage);
            $input['foto_profil'] = "$profileImage";
        }
/*
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();
     
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
*/

        $user = Auth::user();
        $user->uname = $request['uname'];
        $user->name = $request['nama'];
        $user->telepon = $request['telepon'];
        $user->jenis_kelamin = $request['jenis_kelamin'];
        $user->alamat_lengkap = $request['alamat'];
        $user->foto_profil = $input['foto_profil'];
        $user->save();
 
        return back();
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
