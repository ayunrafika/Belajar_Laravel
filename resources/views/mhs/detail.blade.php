@extends ('layouts.main')

@section('content')
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
            <ul class="list-group list-group-horizontal-sm">
                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>NIM</td>
                            <td colspan="2">{{ $data['NIM'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jenis Kelamin</td>
                            <td colspan="2">{{ $data['gender'] === 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Usia</td>
                            <td colspan="2">{{ $data['usia'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Alamat</td>
                            <td colspan="2">{{ $data['alamat'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Nilai</td>
                            <td colspan="2">{{ $data['nilai'] }}</td>
                        </tr>
                    </tbody>
                </table>
              </ul>
        </div>
    </div>

    <div class="col mb-5">
        <x-button-link url="/mhs/mahasiswa" btnColor="secondary" text="Kembali" />
        <x-button-link url="/mhs/mahasiswa/edit/{{ $id }}" text="Edit" btnColor="primary" />
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Hapus
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
                    Hapus Data Mahasiswa?
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
