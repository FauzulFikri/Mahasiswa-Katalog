@extends('admin.layout.app')

@section('heading', 'User Edit')
    
@section('main_content')

    <form action="{{ route('admin_user_update', $edit->id) }}" method="post">
        @csrf
    .<div class="container">
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
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="enter here"  >
                </div>
               <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="enter here">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Retype Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="enter here">
              </div>
                <button type="submit" class="btn btn-outline-primary w-25 ">update</button>
            </form>
        </div>
    </div>
    </form>
<br>
<br>

@endsection
