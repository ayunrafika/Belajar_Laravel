@extends ('layouts.main')

@section ('content')

<div class="container mt-5">
</div>

<div class="p-2 mb-1 text-white" style="background-color: #f7c82d">
    <h5> Daftar Tutor </h5>
</div>

<table class="table table-bordered mb-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Bidang Keahlian</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataTutor as $itemTutor)
            <tr>
                <th scope="row"> {{ $loop->index + 1 }} </th>
                <td>{{ $itemTutor['nama'] }}</td>
                <td>{{ $itemTutor['bidang keahlian'] }}</td>
                <td>{{ $itemTutor['personal']['email'] }}</td>
                
                <td>
                <x-button-link text="Detail" url="/detailTutor/{{ $itemTutor['id'] }}" style="background-color: #212c5f" />
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection