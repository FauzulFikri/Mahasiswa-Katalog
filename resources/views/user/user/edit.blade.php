@extends('user.layout.app')

@section('heading', 'User Edit Profile')
    
@section('main_content')
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Edit Mahasiswa</div>
        <div>
            <a href="" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="card p-sm-5">
        <form class="row g-3">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM</label>
                <input type="text" class="form-control" id="NIM">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat">
            </div>
            <div class="col-md-6">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan">
            </div>
            <div class="col-md-6">
                <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                <input type="text" class="form-control" id="tahunMasuk">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori">
                    <option selected>Choose...</option>
                    <option value="1">one</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="talent" class="form-label">Talent</label>
                <select class="form-select" id="talent">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="noHp" class="form-label">Nomor Handphone</label>
                <input type="email" class="form-control" id="noHp">
            </div>
            <button type="submit" class="btn btn-outline-primary w-25 ">update</button>
        </form>
    </div>
</div>
@endsection