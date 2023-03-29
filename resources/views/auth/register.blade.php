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
                    <img src="/img/Login.jpg" alt="Login"
                        class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                </div>
                <div class="col-lg-8">
                    <div class="card-body py-5 px-md-5">

                        <form action="/auth/register" method="POST">
                            @csrf

                            {{-- generated --}}
                            {{-- <input type="hidden" name="token" value={{ csrf_token() }}> --}}

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            {{-- <div class="row">
                                <div class="col d-flex md-6 mb-2"> --}}
                            <div class="form-outline mb-2">
                                <label class="form-label" for="name">Nama</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- </div>
                                <div class="col d-flex md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="name">Nama belakang</label>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <!-- Fakultas input -->
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
                            </div> --}}

                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="email">Alamat Email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" />
                                @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- <!-- Checkbox -->
                            <div class="form-check d-flex mb-2">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                    checked />
                                <label class="form-check-label" for="form2Example33">
                                    Berlangganan berita
                                </label>
                            </div> --}}

                            {{-- <div>
                                <h6>Sudah punya akun?</h6>
                            </div>
                                <a type="button" class="btn btn-block text-light mt-4" style="background-color: #f7c82d"
                                    href="/auth/login">Login</a> --}}
                            

                            <!-- Submit button -->
                            {{-- <a type="button" class="btn btn-block text-light mb-2" style="background-color: #f7c82d"
                                href="/auth/register">Daftar</a> --}}

                            <div class="form-text">
                            Sudah punya akun? <a href="/auth/login" class="text-decoration-none">Login</a>
                            </div>
                            
                            <div class="col-lg-15 mt-2 py-2">
                            <x-button type="submit" text="Daftar" color="warning" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->
@endsection
