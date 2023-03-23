@extends('layouts.main')

@section('content')

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
<a class="btn btn-warning" href="/login" role="button">Login</a>
</div>

{{-- <div class="container mt-4 mb-4 p-2">
<div class="col col-lg-2 mb-4">
<div>
<label for="exampleDataList" class="form-label">Fakultas</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Ketik untuk mencari...">
<datalist id="datalistOptions">
  <option value="Fakultas Sains dan Teknologi">
  <option value="Fakultas Hukum, Ilmu Sosial, dan Ilmu Politik">
  <option value="Fakultas Keguruan dan Ilmu Pendidikan">
  <option value="Fakultas Ekonomi">
</datalist>
</div>
</div>
</div> --}}


@endsection