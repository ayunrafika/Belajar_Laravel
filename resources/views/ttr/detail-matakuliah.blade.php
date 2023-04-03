@extends ('layouts.main')

@section('content')

<h3>Detail Mata Kuliah | {{ $data->nama }} - {{ $data->kode }}</h3>
<p></p>
<h6>Diampu oleh Tutor:</h6>
<table class="table table-bordered mb-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID Tutor</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($data->tutors as $itemTutor)
            <tr>
                <th scope="row"> {{ $loop->index + 1 }} </th>
                <td>{{ $itemTutor['nama'] }}</td>
                <td>{{ $itemTutor['id_tutor'] }}</td>
              
                <td>
                <x-button-link text="Detail" url="/ttr/detailtutor/{{ $itemTutor['id'] }}" style="background-color: #212c5f" />
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
