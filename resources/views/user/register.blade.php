<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
    <title>Talent UNP</title>
</head>

<body style="background-color: #F1F6F5;">

    <nav class="navbar navbar-expand-lg navbar-light" style=" height: 70px;  background-color: #472183;">
        <div class="container text-white">
          <div class="potition-relative">
            <img style="height: 50px;" src="{{ asset('img/logounp.png') }}" alt="">
            <a class="navbar-brand text-white" style="h2" href="#">Talent UNP</a>
          </div>
            <a class="nav-link active text-white " aria-current="page" href="{{ route('user_login') }}" >Login</a>
          </div>
          <hr style="height: 6px;">
      </nav>
    
           
            <div class="cotainer p-5">
                <div class="alert alert-warning margin-top-10 padding-top-20">
                    <h4><strong>Selamat Datang di Talent Universita Negeri Padang</strong></h4>
                    <p>Sebelum Anda melakukan pendaftaran akun, <strong>seluruh pendaftar harus Anggota Universitas Negeri Padang "Baik itu Mahasiswa, Dosen, dan Tenaga Kependidikan"</strong>.</p>
                    <p>Dimana bagi Mahasiswa UNP dibuktikan Dengan Nomor Induk Mahasiswa, bagi Dosen dan Tenaga Kependididikan dibuktikan dengan Nomor Kartu Pegawai. Tenaga Kependidikan yang tidak memiliki Nomor Kartu Pegawai dapat menggunakan NIP. Selain dari pada itu tidak dapat mendaftar akun, sekian Terima Kasih</p>
                    <hr>
                    <br>
                </div>
            </div>
         
            <div class="container d-flex justify-content-center" >
                <div class="card p-sm-5 w-50  " >
                    <h2>Buat Akun Kamu</h2>
                    <p>Pilihlah Salah satu tombol dibawah ini sesuai perkerjaan anda di Universitas Negeri Padang</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@fat">Mahasiswa</button>
                    <br><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@fat">Dosen</button>
                    <br><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@fat">Tenaga Kependidikan</button>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create Akun</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{ route('front_user_store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="Name" name="name">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="" class="form-label">NIM</label>
                                        <input type="text" name="no_pengenal" id="no_pengenal" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Alamat Email</label>
                                        <input type="email" class="form-control" id="Email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label" for="">Repeat your password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation">
                                    </div>
                                      <div class="form-check d-flex justify-content-center mb-3">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                          I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                      </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Create Akun</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="{{ route('front_user_store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Dosen</label>
                                    <input type="text" class="form-control" id="Name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Kartu Pegawai</label>
                                    <input type="text" name="no_pengenal" id="no_pengenal" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="Email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="">Repeat your password</label>
                                    <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation" >
                                </div>
                                  <div class="form-check d-flex justify-content-center mb-3">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                  </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Akun</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="{{ route('front_user_store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Tenaga Kependidikan</label>
                                <input type="text" class="form-control" id="Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nomor Kartu Pegawai/NIP</label>
                                <input type="text" name="no_pengenal" id="no_pengenal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label" for="">Repeat your password</label>
                                <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation">
                            </div>
                              <div class="form-check d-flex justify-content-center mb-3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" >
                                <label class="form-check-label" for="form2Example3g">
                                  I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                </label>
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Sudah memiliki akun? <a href="{{ route('user_login') }}"
                    class="fw-bold text-body"><u>Login disini</u></a></p>
              </div>
                      
                    {{-- <form class="row g-3"  action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Foto</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" placeholder="Enter Nim" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="col-md-6">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan">
                        </div>
                        <div class="col-md-6">
                            <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk">
                        </div>
                        <div class="mb-3">
                            <label for="desk" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea"></textarea>
                          </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <button type="submit" class="btn btn-primary w-25 ">Submit</button>
                    </form> --}}
                
                  </div>
            </div>
  

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>