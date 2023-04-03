@extends ('layouts.main')

@section ('content')

@if (session('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    {{-- <strong>{{ session('success')[0] }}</strong>{{ session('success')[1] }} --}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session('deleted'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('deleted') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h5><b>{{Auth::user()->name}}</b> login sebagai <b>{{Auth::user()->role}}</b>.</h5>

<div class="container mt-5">
</div>

<div class="container mt-3 mb-3 p-1">
    <x-button-link text="Tambah Tutor" url="/ttr/tutor/tambah" style="background-color: #212c5f" />
</div>

<div class="p-2 mb-1 text-white" style="background-color: #f7c82d">
    <h5> Daftar Tutor </h5>
</div>

<table class="table table-bordered mb-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID Tutor</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($dataTutor as $itemTutor)
            <tr>
                <th scope="row"> {{ $loop->index + 1 }} </th>
                <td>{{ $itemTutor['nama'] }}</td>
                <td>{{ $itemTutor['id_tutor'] }}</td>
                <td>
                    <a href="/ttr/detail-matakuliah/detail{{ $itemTutor->mataKuliah->id }}" class="text-decoration-none">
                        {{ $itemTutor->mataKuliah->nama }}</a>
                    </td>
                {{-- <td>{{ $itemTutor->mataKuliah->nama }}</td> --}}
                
                <td>
                <x-button-link text="Detail" url="/ttr/detailtutor/{{ $itemTutor['id'] }}" style="background-color: #212c5f" />
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Pagination --}}
{{ $dataTutor->links() }}
@endsection