@extends ('layouts.main')

@section ('content')

@if (session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif

<h3>Detail Mahasiswa | {{ $id }}</h3>
        
    <div class="card mt-5 mb-5">
    
        <div class="card-body">
          <h5 class="card-title">Nama: {{ $data['nama'] }}</h5>
          <ul class="list-group">
            <li class="list-group-item">NIM: {{ $data['NIM'] }}</li>
            <li class="list-group-item">Gender: {{ $data['gender'] === 1 ? 'Laki-laki' : 'Perempuan'}}</li>
            <li class="list-group-item">Usia: {{ $data['usia'] }}</li>
            <li class="list-group-item">Alamat: {{ $data['alamat'] }}</li>
            <div class="card-footer text-white" style="background-color: #212c5f">Nilai: {{ $data['nilai'] }}</div>
        </ul>
        </div>
        </div>
      
        <div class="col mb-5">
          <x-button-link url="/mhs/mahasiswa/edit/{{ $id }}" text="Edit" btnColor="primary" />
          <x-button-link url="/mhs/mahasiswa" btnColor="primary" text="Kembali" />
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete
            </button>
        </div>
       

{{-- Modal Konfirmasi Delete --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>Konfirmasi
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Yakin Menghapus Data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="/mhs/mahasiswa/delete/{{ $id }}" method="POST">
          @method('DELETE')
          @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
        
@endsection