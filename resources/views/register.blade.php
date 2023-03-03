@extends('layout.main')

@section('main-section')


<div class="container h-100">
  <div class="col-lg-12 col-xl-11">

    <div class="card text-black" style="border-radius: 25px;">
      <div class="card-body p-md-5">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            

            <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4 mt-4">Sign up</p>

            <form class="mx-1 mx-md-4" action="register/user" method="post">
              @csrf
              <div class="d-flex flex-row align-items-center mb-2">
                <div class="form-outline flex-fill mb-2">
                  <input type="text" id="name" name="name" class="form-control" />

                  <label class="form-label" for="form3Example1c">Your Name</label>



                </div>
              </div>


              <div class="d-flex flex-row align-items-center mb-2">
                <div class="form-outline flex-fill mb-2">
                  <input type="email" id="email" name="email" class="form-control" />
                  <label class="form-label" for="form3Example3c">Your Email</label>
                </div>
              </div>

              <div class="d-flex flex-row align-items-center mb-2">
                <div class="form-outline flex-fill mb-2">
                  <input type="password" id="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4c">Password</label>
                </div>
              </div>

              <div class="d-flex flex-row align-items-center mb-2">
                <div class="form-outline flex-fill mb-2">
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" />
                  <label class="form-label" for="form3Example4cd">Repeat your password</label>
                </div>
              </div>


              <div class="d-flex justify-content-center mx-4 mb-2 mb-2g-4">
                <button class="btn btn-primary btn-lg" type="submit">Register</button>
              </div>

            </form>

          </div>
          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
              class="img-fluid" alt="Sample image">

              

          </div>
          @if(Session::has('error'))
            <p class="alert alert-error">
              {{Session::get('error')}}
            </p>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>



@endsection