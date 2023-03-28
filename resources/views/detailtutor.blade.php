@extends ('layouts.main')

@section('content')
    <h3>Detail Tutor | {{ $id }}</h3>

    <div class="card mt-5 mb-5">

        <div class="card-body">
            <h5 class="card-title">Nama: {{ $dataTutor['nama'] }}</h5>
            <ul class="list-group">
                <li class="list-group-item">ID Tutor: {{ $dataTutor['ID Tutor'] }}</li>
                <li class="list-group-item">Email: {{ $dataTutor['email'] }}</li>
                <li class="list-group-item">Gender: {{ $dataTutor['gender'] === 1 ? 'Laki-laki' : 'Perempuan' }}
                </li>
                <li class="list-group-item">Alamat: {{ $dataTutor['alamat'] }}</li>
                <li class="list-group-item">Bidang Keahlian: {{ $dataTutor['bidang keahlian'] }}</li>
                <div class="card-footer text-white" style="background-color: #212c5f">Periode Mengajar:
                    {{ $dataTutor['periode mengajar'] }}</div>
            </ul>
        </div>
    </div>

    <div class="col mb-5">
        <x-button-link url="/tutor" btnColor="primary" text="Kembali" />
    </div>
@endsection
