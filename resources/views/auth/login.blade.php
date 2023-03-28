@extends('layouts.main')

@section ('content')
<div class="text-dark p-2 mt-3">
    <h3> Halaman Login </h3>
  </div>
  
  {{-- <div class="container mt-4 mb-4 p-2">
  <div class="col col-lg-2 mb-4">
  <label for="exampleFormControlInput1" class="form-label">Username atau Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Tetap masuk</label>
  </div>
  </div>
  <a class="btn btn-primary" href="/auth/login" role="button">Login</a>
  </div> --}}

  <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="/img/Login.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Username atau Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row">
              <div class="col d-flex">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Ingat saya </label>
                </div>
              </div>

              
          <!-- Submit button -->
          <div class="col-lg-15">
            <a type="button" class="btn btn-block text-light mt-4" style="background-color: #f7c82d" href="/auth/login">Login</a>
            <a type="button" class="btn btn-block text-light mt-4" style="background-color: #f7c82d" href="/auth/register">Daftar</a>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
@endsection