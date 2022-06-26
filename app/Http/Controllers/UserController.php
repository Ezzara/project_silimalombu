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
    public function delete ($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return Redirect()->route('admin.userdata');

    }

    public function destroy(User $user)
    {
        //$user = User::find($id);
        dd($user);
        $user->delete();


        return Redirect()->route('admin.userdata');
    }
}
