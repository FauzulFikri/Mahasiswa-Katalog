<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontUserController extends Controller
{

    public function create()
    {
        return view('/user/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_pengenal' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $tambah = new Student();
        $tambah->name = $request->name;
        $tambah->no_pengenal = $request->no_pengenal;
        $tambah->save();

        $store = new User();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->save();

        return redirect()->route('user_login')->with('success', 'Akun berhasil dibuat');
  
    }
}
