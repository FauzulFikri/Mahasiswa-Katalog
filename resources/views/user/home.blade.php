<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Talent UNP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-color: #F1F6F5;">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #472183;">
            <div class="container text-white">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img style="height: 30px;" src="{{ asset('img/logounp.png') }}" alt="">
              <a class="navbar-brand text-white" href="{{ route('user_home') }}">Talent UNP</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="p-2">
                        <img style="height: 30px;"  class="rounded-circle" src="{{ asset('img/hu.JPG') }}" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                </div>
                <a class="nav-link active text-white" aria-current="page" href="{{ route('user_logout') }}">Logout</a>
              </div>
            </div>
             </div>

          </nav>

<div class="modal fade modal-fullscreen-md-down" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="container">
              <div class="card p-sm-5">
                  <img src="{{ asset('img/hu.JPG') }}"  class="img-fluid rounded-circle" width="100px"
                  height="100px" alt="">
                  <form class="row g-3" action="{{ route('user_user_store') }}" method="post" enctype="multipart/form-data">
                      <table class="table table-borderless">
                          <tbody>
                              <tr>
                                <td>Nama</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>No.Pengenal</td>
                                <td></td>
                              </tr>
                              <tr>
                                  <td>Alamat</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Pekerjaan</td>
                                  <td></td>
                                </tr>
                                <tr>
                                    <td>Tahun Masuk</td>
                                    <td></td>
                                </tr>
                                <tr>
                                  <td>no handphone</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>kategori</td>
                                  <td></td>
                                  <td><a href="" button type="button" class="btn btn-link"><i class="fa fa-plus-circle" style="font-size:24px;color:green"></i></a></td>
                                </tr>
                                <tr>
                                  <td>talent</td>
                                  <td></td>
                                  <td><a href="" button type="button" class="btn btn-link"><i class="fa fa-plus-circle" style="font-size:24px;color:green"></i></a></td>
                                </tr>
                          </tbody>
                        </table>
                  </form>
              </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('user_user_create') }}" type="button" class="btn btn-primary" >Edit Profil</a>
      </div>
    </div>
  </div>
</div>

      <div class="container-md p-5">
        <div class="row g-4">
          <div class="col-6 col-md-4">
            <div class="card p-5 text-center" style="height: 300px;">
              <div class="card-body ">
                  <img src="{{ asset('img/hu.JPG') }}"  class="img-fluid rounded-circle" width="200px"
                  height="200px" alt="">
                  <br>
                  <h3 style="font-family: Prata;">Hallo user </h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-8">
                <div class="card " style="height: 300px;"> 
                    <div class="card-header">
                      <h2><b>About</b></h2>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing
                         elit. Temporibus tempora perspiciatis eius quam consequatur est reprehenderit beatae, rem praesentium sint! Inventore nihil incidunt 
                        consequuntur vitae odio accusantium consectetur assumenda? Ullam!
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                      Et, repudiandae! Labore aliquam facilis aut est vero. Dignissimos dolore culpa repellendus. 
                      Iusto suscipit cumque modi aut atque quam error magnam expedita?</p>
                      </p>
                    </div>
                </div>
          </div>
      </div>       
      <div  class="potition-relative">
        <div class="  text-center ">
          <h1 style="font-family: Prata;">AYO TEMUKAN BAKAT <br> KAMU CARI</h1>
          <div class="row g-3 p-4">
           
          </div>
        </div>
    <div class="row g-2">
      <div class="col-6">
        <img style="height: 300px;" src="{{ asset('img/3.jpg')}}" alt="">
      </div>
      <div class="col-6">
        <div class="">
          <h1 style="font-family: Prata;">Gunakan Bakat-Bakat Terbaik<br>Universitas Negeri Padang</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit rem 
            commodi ex aliquam fugiat velit! Vel, molestias optio, 
            autem nesciunt iure provident rem sit libero mollitia ad delectus error laudantium.</p>
          
        </div>
      </div>
    </div>
      </div>
     
<div style="padding-left: 20px; padding-right: 20px;">
<div class="text-white" style="background-color: #472183; ">
<br>
<div class="container">
  <div class="box" style="padding-top: 30px">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <h5 class="color-base mb-2 " style="font-weight: bold; font-size: 20px;">Talent UNP</h5>
        <p class="color-base " style="font-size: 18px;"> Mengumpulakn Bakat Terbaik <br> Universitas Negeri Padang</p>
        <br>
    </div>
    <div class="col-md-6 col-lg-2">
      <p class="color-base mb-2" style="font-weight:bold; font-size: 18px;">Help</p>
      <a class=" btn" href="/" style="font-size: 15px; color:white">Home</a>
      <br>
      <a class="btn" href="" style="font-size: 15px; color:white">Find Talent</a>
  </div>
  <div class="col-md-6 col-lg-2">
    <p class="color-base mb-2" style="font-weight:bold; font-size: 18px;">Platfrom</p>
    <a class=" btn" href="/" style="font-size: 15px; color:white">Home</a>
    <br>
    <a class="btn" href="" style="font-size: 15px; color:white">Find Talent</a>
</div>
      <div class="col-md-6 col-lg-3">
        <p class="color-base mb-2" style="font-weight: bold; font-size: 18px;">Contact</p>
        <p style="font-size: 15px;" class="color-base "><i class="fa fa-map-marker "></i>
            Jl. Prof. Dr. Hamka Air Tawar Padang

        </p>
        <p style="font-size: 15px;" class="color-base "><i class="fa fa-phone p-md-1"></i>+62
            831-7061-0000</p>
        <p style="font-size: 15px;" class="color-base "><i class="fa fa-envelope p-md-1"></i>loremipsum@gmail.com</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-8">
      <div class="d-flex ">
        <p class="color-base p-md-2" style="font-size: 15px; top:2px"> Follow us :</p>
        <a href="" class="btn btn-social p-md-1 "><i style="font-size:20px; color:white" class="fa">&#xf16a;</i></a>
        <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa">&#xf232;</i></a>
        <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa fa-instagram"></i></a>
        <a class="btn btn-social p-md-1" href=""><i style="font-size:20px; color:white" class="fa">&#xf09a;</i></a>
        <a class="btn btn-social p-md-1" href=""><i class="material-icons" style="font-size:20px; color:white">call</i></a>
      </div>
    </div>
    <div class="col-6 col-md-4">
      <div class="d-flex">
      <p class="color-base p-md-2 " style="font-size: 15px; top:2px"> Mobile :</p>
        <a href="" class="btn btn-social p-md-1 "><i style="font-size:20px; color:white" class="fa fa-android"></i></a>
    </div>
    </div>
  </div>
  </div>
</div>
  <div class="container">
          <hr style="height: 6px; background-color: black;">
          <h5 style="font-size: 15px">Copyright &copy; Talent UNP</h5>
          <br>
  </div>
</div>
</div>
  
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
  crossorigin="anonymous"></script>
</body>
</html>
