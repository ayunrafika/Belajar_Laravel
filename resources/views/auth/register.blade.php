@extends('layouts.main')

@section('content')
    <div class="text-dark p-2 mt-3">
        <h3> Halaman Pendaftaran </h3>
    </div>

    {{-- <div class="container mt-4 mb-4 p-2">
  <div class="col col-lg-2 mb-4">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <label for="exampleFormControlInput1" class="form-label">Ulangi Password</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <label for="exampleFormControlInput1" class="form-label">Alamat</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  <div class="mb-3">
  </div>
  <a class="btn btn-primary" href="/auth/register" role="button">Daftar</a>
  </div>
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
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col d-flex md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">Nama depan</label>
                                    </div>
                                </div>
                                <div class="col d-flex md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Nama belakang</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Fakultas input -->
                            <div class="form-outline mb-2">
                              <input class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Klik untuk mencari...">
                            <label for="exampleDataList" class="form-label">Fakultas</label>
                            
                            <datalist id="datalistOptions">
                                <option value="Fakultas Keguruan dan Ilmu Pendidikan">
                                <option value="Fakultas Hukum, Ilmu Politik, dan Ilmu Sosial">
                                <option value="Fakultas Ekonomi">
                                <option value="Fakultas Sains dan Teknologi">
                            </datalist>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <input type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Alamat Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <input type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex mb-2">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                    checked />
                                <label class="form-check-label" for="form2Example33">
                                    Berlangganan berita
                                </label>
                            </div>

                            <!-- Submit button -->
                            <a type="button" class="btn btn-block text-light mb-2" style="background-color: #f7c82d"
                                href="/auth/register">Daftar</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->
@endsection
