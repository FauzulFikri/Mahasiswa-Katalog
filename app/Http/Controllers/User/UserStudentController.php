<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserStudentController extends Controller
{
    public function show()
    {
        $student = Student::orderBy('id', 'asc')->get();
        return view('user.home', compact('student'));
    }

    public function create()
    {
        return view('user.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nim' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'tahun_masuk' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required',
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = date('YmdHis').'.'.$ext;
        
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $tambah = Student::where('id_students', $request->id_students)->first();
        $tambah->name = $request->name;
        $tambah->photo = $final_name;
        $tambah->nim = $request->nim;
        $tambah->jurusan = $request->jurusan;
        $tambah->alamat = $request->alamat;
        $tambah->tahun_masuk = $request->tahun_masuk;
        $tambah->no_telp = $request->no_telp;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->save();

        return redirect()->route('user_home')->with('success', 'data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $edit = Student::where('id', $id)->first();
        return view('user.user.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $update = User::where('id', $id)->first();
        $update->name = $request->name;
        $update->email = $request->email;
        if ($request->password != '') {
            $request->validate([
                'password' => 'required|confirmed',
            ]);
            $update->password = Hash::make($request->new_password);
        }
        $update->update();

        return redirect()->route('admin_user_show')->with('success', 'data berhasil diedit');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin_user_show')->with('success', 'data berhasil dihapus');
    }

}
