@extends('admin.layout.app')

@section('heading', 'List Mahasiswa')
    
@section('main_content')
  <body>

    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Mahasiswa</div>
            <div>
                <a href="{{ route('admin_user_create') }}" class="btn btn-primary">create</a>
            </div>
        </div>  
    </div>
    
    <div class="container p-2">
        <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Photo</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">NIM</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>         
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('uploads/'.$item->photo) }}" alt="" style="width:200px;"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td> 
                    <td>{{ $item->nim }}</td> 
                    <td> <a href="{{ route('admin_user_edit', $item->id ) }}" button type="button" class="btn btn-primary">EDIT</a>
                        <a href="{{ route('admin_user_delete', $item->id ) }}" button type="button" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>

@endsection