    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Mahasiswa</div>
        </div>  
    </div>
    
    <div class="container p-2">
        <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">image</th>
                <th scope="col">NAMA</th>
                <th scope="col">email</th>
                <th scope="col">alamat</th>
                <th scope="col">jurusan</th>
                <th scope="col">tahun masuk</th>
                <th scope="col">skill</th>
                <th scope="col">kategori</th>
                <th scope="col">no hp</th>
                <th scope="col"></th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="{{ asset('img/3.png') }}" width="60" alt="" class="rounded-circle"></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td> 
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td> 
                <td> <button type="button" class="btn btn-primary" href="">EDIT</button>
                    <button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
        </tbody>
      </table>
    </div>
