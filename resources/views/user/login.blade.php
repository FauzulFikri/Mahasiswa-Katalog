
    
    <div class="container p-5 w-50 align-self-center">
          <div class="card p-sm-5 border border-dark" style="background-color: white; ">
            <div class="modal-header mx-auto">
                <img src="{{ asset('img/logounp.png') }}" alt="" class="img-fluid" width="200px"
                    height="200px">
            </div>
            <div class="modal-header mx-auto">
                <p>
                <h3 class="font-weight-bold text-dark" style="font-family: poppins;"  id="exampleModalLabel">Login</h3>
                </p>
            </div>
            <div class="login-form">
                <form action="{{ route('route-login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Address</label>
                      <input type="email" class="form-control border border-dark" id="exampleInputEmail1" placeholder="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control border border-dark" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </form>
            </div>
           
        </div>   
        </div>