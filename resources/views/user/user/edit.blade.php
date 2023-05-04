@extends('user.layout.app')

@section('heading', 'User Edit Profile')
    
@section('main_content')
<form action="{{ route('user_user_edit') }}" method="post">
    @csrf
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Edit Mahasiswa</div>
        <div>
            <a href="{{ route('user_home') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="card p-sm-5">      
        <form class="row g-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">No.Pengenal</label>
                <input type="text" name="nim" id="nim" placeholder="Enter Nim" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
            <div class="mb-3">
                <label for="desk" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea" aria-describedby="desHelp"></textarea>
                    <div id="desHelp" class="form-text">Isilah deskripsi dengan detail prestasi, pegalaman, dan segala sesuatu yang berkait dengan talent anda</div>
                  </div>
            <div class="mb-3">
                <label for="noHp" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <button type="submit" class="btn btn-outline w-25 " style="background-color: 604FDD">update</button>
        </form>
        
    </div>
</div>
</form>
@endsection