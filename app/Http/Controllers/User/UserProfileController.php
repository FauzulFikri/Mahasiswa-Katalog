<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user.user.edit');
    }

    public function profile_submit(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'nim' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'tahun_masuk' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required',
        ]);

        $ext = $request->file('photo')->extension();
        $final_name =  date('YmdHis').'.'.$ext;

        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $store = User::where('email', Auth::guard('admin')->user()->email)->first();
        $store->photo = $final_name;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->nim = $request->nim;
        $store->jurusan = $request->jurusan;
        $store->alamat = $request->alamat;
        $store->tahun_masuk = $request->tahun_masuk;
        $store->no_telp = $request->no_telp;
        $store->deskripsi = $request->deskripsi;
        if ($request->password != '') {
            $request->validate([
                'password' => 'required|confirmed',
            ]);
            $store->password = Hash::make($request->new_password);
        }
        $store->update();
    }

}
