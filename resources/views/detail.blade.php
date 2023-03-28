@extends ('layouts.main')

@section ('content')
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
        <x-button-link url="/home" btnColor="primary" text="Kembali" />
        </div>

        
@endsection