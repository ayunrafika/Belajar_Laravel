@extends('layouts.main')

@section ('content')
<div class="text-dark p-2 mt-3">
    <h3> Halaman Login </h3>
    <h6> Copyright {{ date('Y') }} Universitas Terbuka </h6>
  </div>
  
  <div class="container mt-4 mb-4 p-2">
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
  </div>
@endsection