@extends ('layouts.main')

@section ('content')

<h3> Selamat Datang, Tutor! </h3>

<div class="container mt-5">
</div>

<div class="container mt-3 mb-3 p-1">
    <x-button-link text="Tambah Tutor" url="/tutor/tambah" style="background-color: #212c5f" />
</div>

<div class="p-2 mb-1 text-white" style="background-color: #f7c82d">
    <h5> Daftar Tutor </h5>
</div>

<table class="table table-bordered mb-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID Tutor</th>
            <th scope="col">Bidang Keahlian</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataTutor as $itemTutor)
            <tr>
                <th scope="row"> {{ $loop->index + 1 }} </th>
                <td>{{ $itemTutor['nama'] }}</td>
                <td>{{ $itemTutor['ID Tutor'] }}</td>
                <td>{{ $itemTutor['bidang keahlian'] }}</td>
                
                <td>
                <x-button-link text="Detail" url="/detailTutor/{{ $itemTutor['id'] }}" style="background-color: #212c5f" />
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Pagination --}}
{{ $dataTutor->links() }}
@endsection