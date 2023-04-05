@extends('admin.layout.app')

@section('heading', 'User Create')
    
@section('main_content')
<body style="background-color: #F1F6F5;">

    .<div class="container">
        <div class="card p-sm-5">
            <form class="row g-3">
                <form action="{{ route('admin_user_store') }}" method="post"></form>
                    @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="Nama">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Retype Password</label>
                    <input type="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
            </form>
        </div>
    </div>
<br>
<br>
@endsection