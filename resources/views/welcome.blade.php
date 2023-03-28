@extends('layouts.main')

@section ('content')
{{-- <div class="text-dark p-2 mt-3">
    <h3> Unit Program Belajar Jarak Jauh (UPBJJ) Universitas Terbuka Yogyakarta </h3>
  </div> --}}

  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Welcome.jpg" class="d-block w-100" alt="Gedung UT">
      </div>
      <div class="carousel-item">
        <img src="img/gedung-UT.jpg" class="d-block w-100" alt="Gedung UT">
      </div>
      <div class="carousel-item">
        <img src="img/UT-1.jpeg"class="d-block w-100" alt="UT Pusat">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection