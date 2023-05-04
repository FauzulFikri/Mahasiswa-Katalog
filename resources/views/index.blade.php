<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
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
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #472183; height: 70px">
            <div class="container text-white">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img style="height: 30px;" src="img/logounp.png" alt="">
              <a class="navbar-brand text-white" style="h3" href="#">Talent UNP</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="">Home</a>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link text-white" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Find Talent</a> -->
                    <a class="nav-link active text-white" href="#">Find Talent</a>
                  
                  </li>
                </ul>
                    <form class="d-flex" action="" method="get">
                      <input class="form-control me-2 " type="text"  name="keyword" placeholder="Search" aria-label="Search">
                    </form>
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('user_login') }}">Login</a>
              </div>
            </div>
             </div>
            
          </nav>

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="height: 500px">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/2.jpg" class="d-block w-100"  alt="...">
                    <div class="carousel-caption d-none d-md-block" style="height: 50%">
                      <h2 class="text-light" style="font-family: Abril Fatface;">Bakat Terbaik UNP</h2>
                      <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="height: 50%">
                      <h2 class="text-light" style="font-family: Abril Fatface;">Bekerja Dimanapun</h2>
                      <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/6.jpg" class="d-block w-100"  style="height: 650px" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="height: 50%">
                      <h2 class="text-light" style="font-family: Abril Fatface;">Temukan Sesuai Kebutuhan Anda</h2>
                      <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
             
        
          
          <div class=" m-5 text-center ">
            <h1 style="font-family: Prata;">AYO TEMUKAN BAKAT <br> KAMU CARI</h1>
            <div class="row g-3 p-4">
              <div class="col-4 w-25">
                <div class="card" style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
                  <div class="card-body">
                    <h5 class="card-title text-center"> Komputer dan jaringan</h5>
                    <p class="card-text text-end">1000 peserta
                    </p>
                    <a href="">see more</a>
                  </div>
                </div>
              </div>
              <div class="col-4  w-25">
                <div class="card" style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
                  <div class="card-body">
                    <h5 class="card-title text-center"> Komputer dan jaringan</h5>
                    <p class="card-text text-end">1000 peserta
                    </p>
                    <a href="">see more</a>
                  </div>
                </div>
              </div>
              <div class="col-4  w-25">
                <div class="card" style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
                  <div class="card-body">
                    <h5 class="card-title text-center"> Komputer dan jaringan</h5>
                    <p class="card-text text-end">1000 peserta
                    </p>
                    <a href="">see more</a>
                  </div>
                </div>
              </div>
              <div class="col-4 w-25">
                <div class="card" style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
                  <div class="card-body">
                    <h5 class="card-title text-center"> Komputer dan jaringan</h5>
                    <p class="card-text text-end">1000 peserta
                    </p>
                    <a href="">see more</a>
                  </div>
                </div>
              </div>
              <div class="col-4 w-25">
                <div class="card " style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
                  <div class="card-body">
                    <h5 class="card-title text-center"> Komputer dan jaringan</h5>
                    <p class="card-text text-end">1000 peserta
                    </p>
                    <a href="">see more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        
        <div class="container position-relative "> 
         
          <div class="card text-start " style="background-color: #4B56D2; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.504);">
            <div class="row">
              <div class="col-sm-6 col-md-6 p-5 text-white">
                  <h1 style="font-family: Prata;"> Daftarkan Dirimu <br>Sekarang</h1>
                  
                  <p >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a, 
                    unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
                  </p>
                  <a href="" class="btn  btn-outline-info">Daftar</a>
              </div>
              <div class="col-md-6">
                <div class="card w-300px">
                  <img src="img/5.jpg" alt="...">
                </div>
              </div>
            </div>
          </div>
        </div>
       <br><br>  
      <br>
      <br>
      
      <div class="row g-2">
        <div class="col-6 p-2">
          <img style="height: 300px;" src="img/3.jpg" alt="">
        </div>
        <div class="col-6">
          <div class="p-5 ">
            <h1 style="font-family: Prata;">Gunakan Bakat-Bakat Terbaik<br>Universitas Negeri Padang</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit rem 
              commodi ex aliquam fugiat velit! Vel, molestias optio, 
              autem nesciunt iure provident rem sit libero mollitia ad delectus error laudantium.</p>
            
          </div>
        </div>
      </div>
       


<br><br>
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