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
            <a class="nav-link active text-white " aria-current="page" href="/" >Back</a>
          </div>
          <hr style="height: 6px;">
      </nav>
    
    <div class="container p-5 w-50 align-self-center">
          <div class="card p-sm-5 border border-dark" style="background-color: white; box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.504);">
            <div class="modal-header mx-auto">
                <img src="{{ asset('img/logounp.png') }}" alt="" class="img-fluid" width="200px"
                    height="200px">
            </div>
            <div class="modal-header mx-auto">
                <p>
                <h3 class="font-weight-bold text-dark" style="font-family: poppins;"  id="exampleModalLabel">Login</h3>
                </p>
            </div>
            @if (session()->get('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @elseif (session()->get('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <div class="login-form">
                <form action="{{ route('user_login_submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Email Address</label>
                      <input type="email" class="form-control border border-dark @error ('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
                      @error('email')
                            <div class="text-danger">{{ $message }}</div>
                      @enderror
                      @if (session()->get('error'))
                            <div class="text-danger">{{ session()->get('error') }}</div>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control border border-dark @error ('password') is-invalid @enderror" name="password" placeholder="Password">
                      @error('password')
                            <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <a href="">Lupa Password?</a><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="text-center p-3">
                       <p>Belum memiliki akun?<a href="">Register sekarang</a></p>
                    </div>
                  </form>
            </div>
           
        </div>   
        </div>
<br>
<br>

   



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