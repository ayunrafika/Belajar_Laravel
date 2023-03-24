@extends('layouts.main')

@section ('content')

<div class="text-dark p-2 mt-3">
    <h3> Tentang Kami </h3>
    <h6> Copyright {{ date('Y') }} Universitas Terbuka </h6>
  </div>

<div class="p-2">
<img src="img/gedung-UT.jpg" alt="Gedung UT" width="700">
</div>

<div class="mt-4 p-2">
    <h5> Unit Program Belajar Jarak Jauh Universitas Terbuka Yogyakarta </h5>
    <h6> Jl. Bantul 81, Mantrijeron, Yogyakarta </h6>
    <p> Email: ut-yogyakarta@ecampus.ut.ac.id</p>
</div>

{{-- <div class="container mt-5">
</div>

<div class="p-2 mb-1 bg-primary text-white">
    <h5> Daftar Kontak UPBJJ-UT </h5>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telp</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead> --}}

<div class="container">
<x-button text="Submit" color="primary" size="btn-lg" />
<x-button text="Home" color="warning" size="btn-sm" />
<x-button text="Login" color="success" />
</div>



@endsection