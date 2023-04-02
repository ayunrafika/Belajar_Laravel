@extends('layouts.main')

@section ('content')
{{-- <div class="text-dark p-2 mt-3">
    <h3> Unit Program Belajar Jarak Jauh (UPBJJ) Universitas Terbuka Yogyakarta </h3>
  </div> --}}
 
  
    <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Welcome.jpg" class="d-block img-fluid" width="800" alt="Welcome">
      </div>
      <div class="carousel-item">
        <img src="img/Carousel2.jpg" class="d-block img-fluid" alt="Pendaftaran">
      </div>
      <div class="carousel-item">
        <img src="img/gedung-UT.jpg" class="d-block img-fluid" alt="Gedung UT">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


@endsection