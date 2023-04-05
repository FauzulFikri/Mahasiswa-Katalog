<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td>Nama</td>
                                  <td>Hudiya Mubarokah</td>
                                </tr>
                                <tr>
                                  <td>NIM</td>
                                  <td>21076056</td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td>hud@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Hudiya Mubarokah</td>
                                  </tr>
                                  <tr>
                                    <td>Jurusan</td>
                                    <td>21076056</td>
                                  </tr>
                                  <tr>
                                      <td>Tahun Masuk</td>
                                      <td>hud@gmail.com</td>
                                  </tr>
                                  <tr>
                                    <td>kategori</td>
                                    <td>Hudiya Mubarokah</td>
                                  </tr>
                                  <tr>
                                    <td>talent</td>
                                    <td>21076056</td>
                                  </tr>
                                  <tr>
                                      <td>no handphone</td>
                                      <td>hud@gmail.com</td>
                                  </tr>
                              </tbody>
                          </table>
                    </form>
                </div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="{{ route('user.edit') }}" type="button" class="btn btn-primary" >Edit Profil</a>
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
    <div class="container p-5"> 
    <div class="card text-start " style="background-color: #4E31AA; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.504);">
        <div class="row">
        <div class="col-sm-6 col-md-6 p-5 text-white">
            <h1 style="font-family: Prata;"> Ayo Lengkapi<br> Data Kamu </h1>
            
            <p style="font-size: 15px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a, 
                unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
            </p>
            <a href="" class="btn btn-primary">Lengkapi data</a>
        </div>
        <div class="col-md-6">
            <div class="card" style="height: 400px;">
            <img style="height: 400px;" src="{{ asset('img/2.jpg') }}" alt="...">
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>