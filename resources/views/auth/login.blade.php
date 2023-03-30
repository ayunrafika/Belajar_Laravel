@extends('layouts.main')

@section('content')
    {{-- Alert Message --}}
    @if (session('login-error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('login-error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    <div class="text-dark p-2 mt-3">
        <h3> Halaman Login </h3>
    </div>

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
                    <img src="/img/Login.jpg" alt="Login" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                </div>
                <div class="col-lg-8">
                    <div class="card-body py-5 px-md-5">

                        <form action="/auth/login" method="POST">
                            @csrf
                            <div class="form-outline mb-2">
                                <label class="form-label" for="email">Alamat Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col d-flex">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> Ingat saya </label>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                {{-- <div class="col-lg-15">
                                  <a type="button" class="btn btn-block text-light mt-4" style="background-color: #f7c82d" href="/auth/login">Login</a>
                                  <a type="button" class="btn btn-block text-light mt-4" style="background-color: #f7c82d" href="/auth/register">Daftar</a>
                                  </div> --}}

                                <div class="form-text">
                                    Belum punya akun? <a href="/auth/register" class="text-decoration-none">Daftar</a>
                                </div>

                                <div class="col-lg-15 mt-2 py-2">
                                    <x-button type="submit" text="Login" color="warning" />
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection
